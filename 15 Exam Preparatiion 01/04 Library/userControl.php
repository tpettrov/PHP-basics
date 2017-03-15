<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/14/2017
 * Time: 22:47
 */


/** @var $userModel \Models\UserModel */

require_once('app.php');

if (isset($_POST['Login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $userModel->login($username, $password);

    if($result) {

        $_SESSION['user'] = $username;

       $app->render('bookInput');


    } else {


        echo 'Unrecognized user!';

    }


}
else {


    $app->render('login');

}