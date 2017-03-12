<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/12/2017
 * Time: 14:50
 */

require_once ('userLifecycle.php');

if (isset($_POST['register'])) {

    $userLifeCycle = new UserLifecycle();

    $result = $userLifeCycle->register($_POST['username'], $_POST['fullname'], $_POST['password'], $_POST['birthdate'], $_POST['email']);

    if($result) {

        header('Location: login_frontend.php');
    }

}
