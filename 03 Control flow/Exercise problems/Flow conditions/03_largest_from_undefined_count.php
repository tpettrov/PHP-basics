<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 10:47
 */

$largest = 0;

while ($enteredNumber = intval(fgets(STDIN))) {

    $largest = max($enteredNumber, $largest);

}

echo $largest;