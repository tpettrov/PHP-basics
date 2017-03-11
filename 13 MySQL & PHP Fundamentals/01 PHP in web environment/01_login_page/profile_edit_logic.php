<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 22:01
 */
session_start();

require_once ('UserLifecycle.php');
$userLifeCycle = new UserLifecycle();


if(isset($_POST['change'])) {


$result = $userLifeCycle->edit(trim($_SESSION['user']), $_POST, $_SESSION);

if($result) {

    header('Location: profile.php');
    exit;
}

}

