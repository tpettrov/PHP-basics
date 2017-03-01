<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/1/2017
 * Time: 3:01 PM
 */


if(isset($_GET['submit'])) {

    $amount = $_GET['amount'];
    $currency = $_GET['currency'];
    $compound = $_GET['compound'];
    $period = $_GET['period'];

    $finalSum = $amount;
    for ($i=$period; $i<$period; $i++) {

        $finalSum += $amount * 1.01;

    }




}



include ('view.php');