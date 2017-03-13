<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/12/2017
 * Time: 14:50
 */

include_once ('app.php');

if (isset($_POST['register'])) {


    $result = $userLifeCycle->register($_POST['username'], $_POST['fullname'], $_POST['password'], $_POST['birthdate'], $_POST['email']);

    if($result) {

        header('Location: login.php');
    }

} else {

    ViewEngine\Template::render('registration_frontend');

}
