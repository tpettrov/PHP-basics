<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 10:32
 */

$num1  = intval(fgets(STDIN));
$num2  = intval(fgets(STDIN));
$num3  = intval(fgets(STDIN));

$largestFromOneTwo = max($num1, $num2);
$largest = max($largestFromOneTwo, $num3);

echo 'Max ' . $largest;
