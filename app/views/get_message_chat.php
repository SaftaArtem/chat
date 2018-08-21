<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 20.08.18
 * Time: 17:54
 */
use Models\Chat;
use Models\User;


$messages = Chat::all();
$all = array();
foreach ($messages as $mess) {
    $name = User::where('id', $mess->user_id)->get()[0]->username;
    $itm = array(
        $name => $mess->message
    );
    $all[] = $itm;
}
echo(json_encode($all));