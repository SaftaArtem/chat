<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 16.08.18
 * Time: 15:45
 */

use Models\Chat;

if(isset($_POST["message"])) {
    session_start();
    Chat::create(['user_id' => $_SESSION['id'], 'message' => $_POST["message"]]);
}

?>

