<?php
require PAGES_COMPONENT . "pages.header.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $errors = [];
    if (strlen($_POST['title']) == 0) {
        $errors['title'] = "title required";
    }
    if (strlen($_POST['content']) == 0) {
        $errors['content'] = "content required";
    }

    if (empty($errors)) {
        $sql = 'INSERT INTO posts (title,content,user_id) VALUES (:title,:content,:user_id)';
        $insertPost = DB_CONNECTION->query($sql, ['title' => $_POST['title'], 'content' => $_POST['content'], 'user_id' => 1]);
    }
}


?>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= headerName("create post", 1) ?></h1>
    </div>
</header>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->

        <form class="max-w-sm mx-auto" action="" method="post">
            <label for="title" class="block mb-2 text-sm font-medium text-black dark:text-white">post title</label>
            <textarea id="title" name="title" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="post title ......."></textarea>
            <?php if (isset($errors['title'])) : ?>
                <p class="p-4 mb-4 text-sm text-white rounded-lg bg-red-500 mt-4"><?= $errors['title'] ?></p>
            <?php endif ?>
            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">post content</label>
            <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="post content ......."></textarea>
            <?php if (isset($errors['content'])) : ?>
                <p class="p-4 mb-4 text-sm text-white rounded-lg bg-red-500 mt-4"><?= $errors['content'] ?></p>
            <?php endif ?>
            <button type="submit" class="text-white mt-6
   bg-blue-700 hover:bg-blue-800 focus:ring-4 
   focus:outline-none focus:ring-blue-300 
   font-medium rounded-lg text-sm px-5 py-2.5 text-center 
   dark:bg-blue-600 dark:hover:bg-blue-700 
   dark:focus:ring-blue-800">create your post</button>
        </form>
 
    </div>
</main>

<?php
require PAGES_COMPONENT . "pages.footer.php";
?>