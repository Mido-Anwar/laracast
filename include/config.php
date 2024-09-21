<?php

define("DS", DIRECTORY_SEPARATOR);
define('HTTP_ROOT', 'http://localhost/'); 
define('MAIN_PAGE', HTTP_ROOT . "laracast_php/");
define('HTTP_FOLDER', dirname($_SERVER['PHP_SELF']));
define('PAGES_PATH', HTTP_ROOT . "laracast_php/veiws/pages/");
define('PAGES_COMPONENT', realpath("veiws/partials") . DS);

$pathInPieces = explode('/', $_SERVER['DOCUMENT_ROOT']);
$path = $_SERVER['DOCUMENT_ROOT'] . "/laracast_php/veiws/partials/";
$configPath = $_SERVER['DOCUMENT_ROOT'] . "/laracast_php/include/";
