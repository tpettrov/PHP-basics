<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 22:01
 */
session_start();

include('database.php');


if(isset($_POST['change'])) {

    $newUser = trim($_POST['username']);

    if($newUser == $_SESSION['user']) {

        var_dump($users[$_SESSION['user']]['password'] = trim($_POST['password']));
        $users[$_SESSION['user']]['email'] = trim($_POST['email']);
        $users[$_SESSION['user']]['birthday'] = trim($_POST['birthday']);
    } else {

        echo 'ups';
    }

    $usersAsText = var_export($users, true);
    $declaration = '<?php ' . PHP_EOL .'$users = ' . $usersAsText . ';';
    $result = file_put_contents('database.php', $declaration);
    header('Location: profile.php');


}

