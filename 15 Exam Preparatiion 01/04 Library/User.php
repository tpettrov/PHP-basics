<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/14/2017
 * Time: 22:47
 */

namespace UserControl;

/** @var $userModel \UserModel\UserModel */

require_once('app.php');

if (isset($_POST['Login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $userModel->login($username, $password);

    if($result) {

        $_SESSION['user'] = $username;

       \ViewEngine\Template::render('bookInput');


    } else {


        echo 'Unrecognized user!';

    }


}
else {


    \ViewEngine\Template::render('login');

}