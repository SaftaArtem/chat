<?php
declare(strict_types=1);

include 'vendor/autoload.php';
require 'start.php';

use Controllers\Users;
use Controllers\Questions;
use Controllers\Answers;




$router = new League\Route\Router;

$router->map('GET', '/user/{id:number}/{name:word}', 'Controllers\UserController::showUsers');
$router->map('GET', '/home', 'Controllers\HomeController::main');
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




//$user = Users::create_user("user1","user1@example.com","user1_pass");

// $questions = Questions::create_question("Who is a witch to you?",17);

// $answers = Answers::add_answer("This is no answer to me",1,76);

// $upvote = Answers::upvote_answer(1,14);

// $all = Questions::get_questions_with_answers();

//$all_with_users = Questions::get_questions_with_users();

//$one_question = Questions::get_question_answers_upvotes(1);

//$user_question_count = Users::question_count(17);

//$update_answer = Answers::update_answer(1,"This is an updated answer");

//$delete = Questions::delete_question(1);




