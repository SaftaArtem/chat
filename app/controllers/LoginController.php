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


class LoginController extends Controller
{
    public function getLogin(ServerRequestInterface $request)
    {
        session_start();
        if (isset($_SESSION["session_username"])) {
            header("location:intropage");
        } else {
            $this->view->generate('login.php', 'template_view.php');
        }
    }

    public function postLogin(ServerRequestInterface $request)
    {
        if (isset($_POST["login"])) {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = User::where('username', $username)->get();
                $pass = User::where('password', $password)->get();
                if (count($user) && count($pass)) {
                    session_start();
                    $_SESSION['session_username'] = $username;
                    $data = $_SESSION['session_username'];
                    $this->view->generate('intropage.php', 'template_view.php', $data);
                } else {
                    echo 'Invalid username or password!';
                }

            }
        }
    }

    public function getRegister(ServerRequestInterface $request)
    {
        $this->view->generate('register.php', 'template_view.php');
    }

    public function postRegister(ServerRequestInterface $request)
    {

        if (isset($_POST["register"])) {
            if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                if (count(User::where('username', $username)->get()) == 0 && count(User::where('email', $email)->get()) == 0){
                    $data = $username;
                    $user = User::create(['username' => $username, 'email' => $email, 'password' => $password]);
                    $this->view->generate('intropage.php', 'template_view.php', $data);
                } else {
                    echo 'Your name or email already exist';
                }
            }
        }
    }

    public function intropage(ServerRequestInterface $request)
    {

        session_start();
        if (!isset($_SESSION["session_username"])) {
            header("location:login");
        } else {
            $data = $_SESSION["session_username"];
            $this->view->generate('intropage.php', 'template_view.php', $data);
        }
    }

    public function logout(ServerRequestInterface $request)
    {
        session_start();
        unset($_SESSION['session_username']);
        session_destroy();
        header("location:login");
    }
}