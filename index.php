<?php


require "App/config.php";
require "App/routes.php";

//dd(PAGE_COMPONENT);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


echo "mido";

