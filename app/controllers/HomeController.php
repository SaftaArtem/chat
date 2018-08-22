<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.08.18
 * Time: 13:49
 */
namespace Controllers;

use http\Env\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;

use Symfony\Component\HttpFoundation\Response as Resp;
use Core\Controller;
use Models\User;
use Zend\Diactoros\Response\TextResponse;


class HomeController extends Controller
{

    function test(ServerRequestInterface $request) : ResponseInterface
    {
        $response = new HtmlResponse('tetst');
        return $response;

//         return $response = new TextResponse('Hello world!');
//        $response = new HtmlResponse($t->generate('handler.php', 'template_view.php'));
//        $response->getBody()->write('<h1>Hello, World!</h1>');
//        return $response;
//        return $response;
    }

    public function handler(ServerRequestInterface $request)
    {
        $res = $this->render_handlers('handler.php');
        return new TextResponse($res);
    }

    public function all_message(ServerRequestInterface $request)
    {
        $res = $this->render_handlers('get_message_chat.php');
        return new TextResponse($res);
    }

    public function home(ServerRequestInterface $request) {
        $users = User::all();
        $data = [];
        foreach($users as $user) {
            $user_data = array();
            $user_data['name'] = $user->username;
            $user_data['id'] = $user->id;
            $data[] = $user_data;
        }
        $html  = $this->render('home.php', 'template_view.php', $data);
        return new HtmlResponse($html);
    }
}