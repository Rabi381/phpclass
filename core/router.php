<?php
require 'functions.php';
function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

echo 'ho';


$routes = require base_path('/public/routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);