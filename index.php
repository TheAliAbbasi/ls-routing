<?php

// Include composer's autoload file first
require('vendor/autoload.php');

// Run the router
$router = new Gears\Router();
$router->routesPath = 'routes.php';
$router->dispatch();