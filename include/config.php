<?php

define("DS", DIRECTORY_SEPARATOR);
define('HTTP_ROOT', 'http://localhost/');
define('MAIN_PAGE', HTTP_ROOT . "laracast_php/");
define('PAGES_PATH', HTTP_ROOT . "laracast_php/views/pages/");
define('PAGES_COMPONENT', realpath("views/partials") . DS);


$path = $_SERVER['DOCUMENT_ROOT'] . "/laracast_php/views/partials/";
$configPath = $_SERVER['DOCUMENT_ROOT'] . "/laracast_php/include/";

function headerName($name, $c = 0)
{
    if ($c == 1) {
        return   strtoupper($name);
    } else {
        return $name;
    }
}
function isUrl(string $url)
{
    return $_SERVER['REQUEST_URI'] == $url ? true : false;
}

function dd($value)
{
    echo "<pre>{}";
    var_dump($value);
    echo "</pre>";
    die();
}
