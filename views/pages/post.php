<?php
require PAGES_COMPONENT . "pages.header.php";
$query = "SELECT * FROM posts where id = :id";

$post = DB_CONNECTION->query($query, ['id' => $_GET['id']])->findOrFail();
$currentUserId = 1;
authorize($post['user_id'] == $currentUserId);
?>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= headerName(htmlspecialchars($post['title']), 1) ?></h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <?php

        //  $query = "SELECT * FROM posts where id = ?";

        ?>

        <?= htmlspecialchars($post['content']) ?>

    </div>
</main>

<?php
require PAGES_COMPONENT . "pages.footer.php";
?>