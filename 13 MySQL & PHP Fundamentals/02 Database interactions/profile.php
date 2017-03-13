<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 20:03
 */

session_start();
require_once ('app.php');


if(isset($_SESSION['user'])) {

    $user = $_SESSION['user'];

    $birthday = $userLifeCycle->getBirthday(trim($_SESSION['user']));

    $daysToBirthday = date_diff(new DateTime('now'), DateTime::createFromFormat('Y-m-d', $birthday));
    $screenText  = 'Welcome, ' . $user . '<br>' . 'Days until your birthday: ' . $daysToBirthday->format('%a');

    echo $screenText;

} else {

    echo'Nope';
} ?>

<a href="profile_edit.php">Edit profile here</a>

