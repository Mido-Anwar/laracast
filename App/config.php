<?php

use App\Database, App\Response, App\Router, App\Validator;
use App\Controller\Controller;

define("DS", DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);
define('VIEWS', realpath("views/pages") . DS);
define('PAGE_COMPONENT', realpath("views/partials") . DS);
define('APP_PATH', dirname(realpath(__FILE__)) . DS);

//define('APP_PATH', dirname(realpath(__FILE__)));


//helper function to page component;
function view($path)
{
  
    require VIEWS. $path;
}
function component($path)
{
    require PAGE_COMPONENT . $path;
}
// page head content
function headerName($name, $c = 0)
{
    if ($c == 1) {
        return   strtoupper($name);
    } else {
        return $name;
    }
}
//check url path for styling
function isUrl($url)
{
    return $_SERVER['REQUEST_URI'] == $url ? true : false;
}
function authorize($condetion, $status = Response::FORBIDDEN)
{
    if (! $condetion) {
        //  abort($status);
    }
}
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
// autoload 

spl_autoload_register(function ($class) {

    require  $class . ".php";
});
const DB_CONNECTION = new Database(SERVER_NAME, DB_NAME, USER_NAME, DB_PASSWORD);
