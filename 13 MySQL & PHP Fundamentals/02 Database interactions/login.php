<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 17:21
 */
session_start();
include_once ('app.php');

if (isset($_POST['login'])) {



    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($userLifeCycle->login($username, $password)) {

        $_SESSION['user'] = $username;
        header('Location: profile.php');
        exit;

    }


} else {


    \ViewEngine\Template::render('login_frontend');

}



