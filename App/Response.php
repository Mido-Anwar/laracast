<?php
namespace App;

class Response{

    const FORBIDDEN = 403;
    const NOT_FOUND = 404;

 public function abort($status_code = 404)
{
    http_response_code($status_code);
    require "views/pages/{$status_code}.php";
    die();
}

}