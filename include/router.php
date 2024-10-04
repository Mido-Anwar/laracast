<?php
// Define your routes
$routes = require("routes.php");

function abort($status_code = 404)
{
    http_response_code($status_code);
    require "views/pages/{$status_code}.php";
    die();
}
// Get the requested URL
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

// Check if the requested URL exists in your routes
function router($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        // Handle 404: Page not found
        abort();
    }
}

router($url, $routes);
