<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 17:21
 */
session_start();

include('database.php');

if (isset($_POST['login'])) {


    $username = $_POST['username'];


    if(array_key_exists($username, $users)) {

        $_SESSION['user'] = $username;
        header('Location: profile.php');

    }


} else {

    session_abort();
}



