<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 22:01
 */
session_start();

include_once ('app.php');


if(isset($_POST['change'])) {


$result = $userLifeCycle->edit(trim($_SESSION['user']), $_POST, $_SESSION);

if($result) {

    header('Location: profile.php');
    exit;
}

}

