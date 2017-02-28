<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/28/2017
 * Time: 2:43 PM
 */


session_start();
$mostFreqTag = 0;
if (isset($_POST['submit']) && isset($_POST['text'])) {


    $arrTags = explode(', ', $_POST['text']);

    foreach ($arrTags as $tag) {

        if (isset($_SESSION[$tag])) {

            $_SESSION[$tag]++;
        } else {

            $_SESSION[$tag] = 1;
        }

    }

    arsort($_SESSION);

    $mostFreqTag = max($_SESSION);


} else if (isset($_POST['clear'])) {

    session_destroy();
}


require('view.php');

