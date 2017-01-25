<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 1/25/2017
 * Time: 2:49 PM
 */


$firstNumber = 1.567808;
$secondNumber = 0.356;

//$firstNumber = 1234.5678;
//$secondNumber = 333;


$sumRounded = number_format((float)$firstNumber + $secondNumber, 2, '.', '');

echo '$firstNumber + $secondNumber = ' . "$firstNumber + $secondNumber = $sumRounded";