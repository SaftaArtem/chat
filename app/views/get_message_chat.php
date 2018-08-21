<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 20.08.18
 * Time: 17:54
 */
use Models\Chat;


$messages = Chat::all();
$all = array();
foreach ($messages as $mess) {
    $itm = array(
        $mess->name => $mess->message
    );
    $all[] = $itm;
}
echo(json_encode($all));