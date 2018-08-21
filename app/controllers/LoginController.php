<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.08.18
 * Time: 14:18
 */

namespace Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Core\Controller;
use Models\User;
use Zend\Diactoros\Response\HtmlResponse;


class LoginController extends Controller
{
    public function getLogin(ServerRequestInterface $request)
    {
        session_start();
        if (isset($_SESSION["id"])) {
            $data = User::where('id', $_SESSION["id"])->get()[0]->username;
            $html  = $this->render('intropage.php', 'template_view.php', $data);
            return new HtmlResponse($html);
        } else {
            $html  = $this->render('login.php', 'template_view.php');
            return new HtmlResponse($html);
        }
    }

    public function postLogin(ServerRequestInterface $request)
    {
        if (isset($_POST["login"])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $user = User::where('username', $_POST['username'])->get();
                $pass = User::where('password', $_POST['password'])->get();
                if (count($user) != 0 && count($pass) != 0) {
                    session_start();
                    $data = $_POST["username"];
                    $_SESSION['id'] = User::where('username', $_POST['username'])->get()[0]->id;
                    $html  = $this->render('intropage.php', 'template_view.php', $data);
                    return new HtmlResponse($html);
                } else {
                    echo 'Invalid username or password!';
                }

            }
        }
    }

    public function getRegister(ServerRequestInterface $request)
    {
        $html = $this->render('register.php', 'template_view.php');
        return new HtmlResponse($html);
    }

    public function postRegister(ServerRequestInterface $request)
    {

        if (isset($_POST["register"])) {
            if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                $password = $_POST['password'];
                if (count(User::where('username', $_POST['username'])->get()) == 0 && count(User::where('email', $_POST['email'])->get()) == 0){
                    User::create(['username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $_POST['password']]);
                    $html  = $this->render('login.php', 'template_view.php');
                    return new HtmlResponse($html);
                } else {
                    echo 'Your name or email already exist';
                }
            }
        }
    }

    public function intropage(ServerRequestInterface $request)
    {

        session_start();
        if (!isset($_SESSION["is"])) {
            header("location:login");
        } else {
            $data = User::where('id', $_SESSION["id"])->get()[0]->username;
            $html  = $this->render('intropage.php', 'template_view.php', $data);
            return new HtmlResponse($html);
        }
    }

    public function logout(ServerRequestInterface $request)
    {
        session_start();
        unset($_SESSION['id']);
        session_destroy();
        header("location:login");
    }

}