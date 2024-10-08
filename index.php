<?php

use App\Controller\Controller;

require "App/config.php";
require "App/routes.php";


$routes = require("App/routes.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$con = new APP\Controller\Controller ();
//dd($con->index());
$con->index();
