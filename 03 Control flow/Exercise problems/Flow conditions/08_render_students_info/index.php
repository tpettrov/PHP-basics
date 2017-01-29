<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 14:23
 */

include 'frontEnd_students.php';

if (!empty($_GET['names']) && !empty($_GET['ages'])) {

    $delimeter = $_GET['delimeter'];
    $names = explode("$delimeter", $_GET['names']);
    $ages = explode("$delimeter" , $_GET['ages']);


    include 'table_html.php';
};