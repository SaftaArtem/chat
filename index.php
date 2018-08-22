<?php
declare(strict_types=1);

include 'vendor/autoload.php';
require 'start.php';


$router = new League\Route\Router;

$router->map('GET', '/user/{name:word}/{id:number}', 'Controllers\UserController::showUsers');

//Главная
$router->map('GET', '/home', 'Controllers\HomeController::home');

//обработчики
$router->map('POST', '/handler', 'Controllers\HomeController::handler');
$router->map('POST', '/all_message', 'Controllers\HomeController::all_message');

//Регистрация
$router->map('GET', '/login', 'Controllers\LoginController::getLogin');
$router->map('POST', '/login', 'Controllers\LoginController::postLogin');
$router->map('GET', '/register', 'Controllers\LoginController::getRegister');
$router->map('POST', '/register', 'Controllers\LoginController::postRegister');
$router->map('GET', '/intropage', 'Controllers\LoginController::intropage');
$router->map('GET', '/logout', 'Controllers\LoginController::logout');








$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$response = $router->dispatch($request);

(new Zend\Diactoros\Response\SapiEmitter)->emit($response);

