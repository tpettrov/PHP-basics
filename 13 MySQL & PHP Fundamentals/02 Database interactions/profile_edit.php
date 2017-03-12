<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 21:38
 */
session_start();
include_once ('app.php');

?>

<form method="post" action="profile_edit_logic.php">

    Username: <input type="text" name="username" value="<?= $_SESSION['user'] ?>">
    Password: <input type="password" name="password" value="<?= $userLifeCycle->getPassword(trim($_SESSION['user'])) ?>">
    Email: <input type="text" name="email" value="<?= $userLifeCycle->getEmail(trim($_SESSION['user'])) ?>">
    Birthday: <input type="text" name="birthday" value="<?= $userLifeCycle->getBirthday(trim($_SESSION['user'])) ?>">

    <input type="submit" name="change">


</form>
