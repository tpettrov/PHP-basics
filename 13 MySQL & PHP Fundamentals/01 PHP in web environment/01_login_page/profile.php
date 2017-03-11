<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 20:03
 */

session_start();
require_once ('database.php');

if(isset($_SESSION['user'])) {

    $user = $_SESSION['user'];

    $daysToBirthday = date_diff(new DateTime('now'), DateTime::createFromFormat('d-m-Y', $users[$user]['birthday']));
    $screenText  = 'Welcome, ' . $user . '<br>' . 'Days until your birthday: ' . $daysToBirthday->format('%a');

    echo $screenText;


} else {

    echo'Nope';
}