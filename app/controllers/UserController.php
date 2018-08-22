<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 15.08.18
 * Time: 10:38
 */

namespace Controllers;


use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\HttpFoundation\Response as Resp;
use Models\User;
use Core\Controller;



class UserController extends Controller
{
    /**
     * Controller.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function addUser(ServerRequestInterface $request, array $args)
    {
        $user = User::create(['username' => '111', 'email' => '111', 'password' => '111']);
        $response = new Resp('211');
        $response->send();
    }

    public function showUsers(ServerRequestInterface $request, array $args)
    {
        var_dump($args);
//        $data = User::all()->toArray();
//        var_dump($all_users);
//        $this->view->generate('test.php', 'template_view.php', $data);
    }
}