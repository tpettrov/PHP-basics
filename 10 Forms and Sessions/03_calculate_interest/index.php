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

    $finalSum[0] = $amount;

    for ($i=1; $i<=$period; $i++) {

        $finalSum[$i] = $finalSum[$i-1] * 1.01;

    }




}



include ('view.php');