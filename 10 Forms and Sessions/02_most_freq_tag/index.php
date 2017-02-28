<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/28/2017
 * Time: 2:43 PM
 */


session_start();

if (isset($_POST['text'])) {

    $arrTags = explode(', ', $_POST['text'] );

    foreach ($arrTags as $tag) {

        if(isset($_SESSION[$tag])) {

            $_SESSION[$tag]++;
        } else {

            $_SESSION[$tag] = 1;
        }

    }

    var_dump($arrTags);
    var_dump($_SESSION);

}




require ('view.php');

