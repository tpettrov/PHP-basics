<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 15:22
 */

include 'frontEnd_students.php';

if (!empty($_GET['names']) && !empty($_GET['ages'])) {

    $delimeter = $_GET['delimeter'];
    $names = explode("$delimeter", $_GET['names']);
    $ages = explode("$delimeter" , $_GET['ages']);


    include 'table_html.php';

    if (isset($_GET['next'])) {

         var_dump($names);

    }

};

