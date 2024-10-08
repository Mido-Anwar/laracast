<?php
// Define your routes

// function abort($status_code = 404)
// {
//     http_response_code($status_code);
//     require "views/pages/status/{$status_code}.php";
//     die();
// // }
// // Get the requested URL
// $url = parse_url($_SERVER['REQUEST_URI'])['path'];

// Check if the requested URL exists in your routes
// function router($url, $routes)
// {
//     if (array_key_exists($url, $routes)) {
//         require $routes[$url];
//     } else {
//         // Handle 404: Page not found
//         abort();
//     }
// }

// router($url, $routes);
namespace App;



class Router
{
    protected $routes = [];
    public function get($uri, $controller)
    {
        $this->routes = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }
    public function post($uri, $controller)
    {
        $this->routes = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }
    public function patch($uri, $controller)
    {
        $this->routes = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }
    public function put($uri, $controller)
    {
        $this->routes = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }
    public function delete($uri, $controller)
    {
        $this->routes = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE'
        ];
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)) {
                
                return require view($route['controller']);
            } else {
                $this->abort();
            }
        }
    }
    protected  function abort($status_code = 404)
    {
        http_response_code($status_code);
        require "views/pages/status/{$status_code}.php";
        die();
    }
}
