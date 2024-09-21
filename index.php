<?php
require "include/config.php";
include  PAGES_COMPONENT ."pages.header.php";

?>

<header class="bg-white shadow">
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Home</h1>
  </div>
</header>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <!-- Your content -->
    <?php
echo HTTP_FOLDER;

?>
  </div>
</main>

<?php
include  PAGES_COMPONENT ."pages.footer.php";
?>