<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 13:46
 */


if(isset($_GET['calculate'])) {

    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $operation = $_GET['operation'];

    if($operation == 'sum'){

        $result = ($num1 + $num2);
    }else if($operation == 'substract') {

        $result = ($num1 - $num2);
    } else $result = 'Invalid operation';


} else echo 'Not Submitted yet';

include 'calculator_frontend.php';