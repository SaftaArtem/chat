<?php
declare(strict_types=1);

include 'vendor/autoload.php';
require 'start.php';


$router = new League\Route\Router;

$router->map('GET', '/user/{id:number}/{name:word}', 'Controllers\UserController::showUsers');

$router->map('GET', '/home', 'Controllers\HomeController::home');
$router->map('GET', '/login', 'Controllers\LoginController::getLogin');
$router->map('POST', '/login', 'Controllers\LoginController::postLogin');
$router->map('GET', '/register', 'Controllers\LoginController::getRegister');
$router->map('POST', '/register', 'Controllers\LoginController::postRegister');
$router->map('GET', '/intropage', 'Controllers\LoginController::intropage');
$router->map('GET', '/logout', 'Controllers\LoginController::logout');

$router->map('POST', '/handler', 'Controllers\HomeController::handler');
$router->map('POST', '/all', 'Controllers\HomeController::all');




$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$response = $router->dispatch($request);



(new Zend\Diactoros\Response\SapiEmitter)->emit($response);

