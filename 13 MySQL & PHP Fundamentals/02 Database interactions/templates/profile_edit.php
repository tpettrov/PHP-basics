<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 21:38
 */

//include_once('app.php');
/** @var \DTO\Profile $data */

?>

<form method="post">

    Username: <input type="text" name="username" value="<?= $data->getUsername() ?>">
    Password: <input type="password" name="password" value="<?= $data->getPassword() ?>">
    Email: <input type="text" name="email" value="<?= $data->getEmail() ?>">
    Birthday: <input type="text" name="birthday" value="<?= $data->getBirthday() ?>">

    <input type="submit" name="change">


</form>
