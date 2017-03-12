<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 17:21
 */
session_start();


if (isset($_POST['login'])) {

    include_once ('userLifeCycle.php');
    $userLifeCycle = new UserLifecycle();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($userLifeCycle->login($username, $password)) {

        $_SESSION['user'] = $username;
        header('Location: profile.php');
        exit;

    }


}



