<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 11:01
 */


$largest = PHP_INT_MIN;

while ($enteredNumber = intval(fgets(STDIN))) {

    $largest = max($enteredNumber, $largest);

}

echo 'Max: ' .
    $largest;