<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16.08.18
 * Time: 15:45
 */

use Models\Chat;

if(isset($_POST["message"]) && isset($_POST["name"])) {
    echo $_POST["message"].' ';
    echo $_POST["name"];
//    Chat::create(['username' => $_POST["name"], 'message' => $_POST["message"]]);
    Chat::create(['name' => $_POST["name"], 'message' => $_POST["message"]]);
}

?>
