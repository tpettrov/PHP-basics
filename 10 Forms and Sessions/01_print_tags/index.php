<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/28/2017
 * Time: 11:06 AM
 */

if (isset($_POST['text'])) {

    $arrTags = explode(', ', $_POST['text'] );

}

require ('view.php');