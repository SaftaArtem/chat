<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.08.18
 * Time: 13:49
 */

namespace Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\HttpFoundation\Response as Resp;
use Core\Controller;
use Models\User;


class HomeController extends Controller
{
    public function main(ServerRequestInterface $request)
    {


        if (count(User::where('username', 'test')->get()) !== 0 && count(User::where('email', 'test@mail')->get()) !== 0){
            echo '+';
        } else {echo  '-';}
//        $this->view->generate('home.php', 'template_view.php');
    }
}