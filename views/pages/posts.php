<?php
require PAGES_COMPONENT . "pages.header.php";
// $id = $_GET['id'];
$queryuser = "SELECT * FROM posts where user_id = ?";
$queryall = "SELECT * FROM posts;";

// $query = "SELECT * FROM posts where id = :id"; assoc array

$posts = DB_CONNECTION->all($queryall)->fetchAll();

?>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= headerName("all posts", 1) ?></h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <ul>
            <?php foreach ($posts as $post) : ?>

                <li>
                    <a class="mb-6 font-bold text-blue-950 text-decoration-line: underline" href="/post?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </li>

            <?php endforeach ?>
        </ul>
    </div>
</main>

<?php
require PAGES_COMPONENT . "pages.footer.php";
?>