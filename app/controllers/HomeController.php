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
        ob_start();
        $this->view->handler('handler.php');
        $res = ob_get_clean();
        return new TextResponse($res);
    }
    public function all(ServerRequestInterface $request)
    {
        ob_start();
        $this->view->handler('get_message_chat.php');
        $res = ob_get_clean();
        return new TextResponse($res);
    }


    public function home(ServerRequestInterface $request) {

        $html  = $this->render('home.php', 'template_view.php');

//        ob_start();
//        $this->view->generate('home.php', 'template_view.php');
//        $html = ob_get_clean();

        return new HtmlResponse($html);
    }
}