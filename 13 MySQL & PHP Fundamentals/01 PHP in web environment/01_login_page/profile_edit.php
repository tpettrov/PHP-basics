<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 21:38
 */
session_start();
include_once('database.php');

?>

<form method="post" action="profile_edit_logic.php">

    Username: <input type="text" name="username" value="<?= $_SESSION['user']?> ">
    Password: <input type="password" name="password" value="<?= $users[$_SESSION['user']]['password'] ?> ">
    Email: <input type="text" name="email" value="<?= $users[$_SESSION['user']]['email'] ?> ">
    Birthday: <input type="text" name="birthday" value="<?= $users[$_SESSION['user']]['birthday'] ?> ">

    <input type="submit" name="change">


</form>
