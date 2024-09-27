<?php
require PAGES_COMPONENT . "pages.header.php";


?>

<header class="bg-white shadow">
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= headerName("about", 1) ?></h1>
  </div>
</header>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <?php
    var_dump(parse_url($_SERVER['REQUEST_URI']));

    ?>
  </div>
</main>
<?php
require PAGES_COMPONENT . "pages.footer.php";

?>