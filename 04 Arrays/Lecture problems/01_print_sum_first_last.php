<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/1/2017
 * Time: 8:49 AM
 */

$array = [20, 30, 40];
$length = count($array);
$sum = $array[0] + $array[$length - 1];
echo $sum;