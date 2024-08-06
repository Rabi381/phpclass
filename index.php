<?php


const BASE_PATH = __DIR__ . '/';
require 'core/Router.php';


$router = new \Core\router();

$routes = require base_path('/routes.php');
 $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

 $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $router);