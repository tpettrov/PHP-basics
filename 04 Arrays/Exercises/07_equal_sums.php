<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/8/2017
 * Time: 21:13
 */

$input = trim(fgets(STDIN));
$inputArr = explode(' ', $input);

//$inputArr = explode(' ', '1 2');

$size = count($inputArr);

for ($i = 0; $i <= $size - 1; $i++) {

    if (slicer($i, $size, $inputArr)) {

        echo $i;
        $found = true;
        break;
    }


}

if (!isset($found)) {

    echo 'no';
}

function slicer($i, $size, $inputArr)
{

    $left = array_sum(array_slice($inputArr, 0, $i));
    //echo $left;

    $right = array_sum(array_slice($inputArr, $i + 1, $size));
    //echo $right;
    if ($left == $right) {
        return true;
    } else return false;


}