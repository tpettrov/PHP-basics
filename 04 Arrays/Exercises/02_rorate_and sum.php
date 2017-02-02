<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/2/2017
 * Time: 9:10 AM
 */

$input = explode(' ', trim(fgets(STDIN)));
$k = trim(fgets(STDIN));

//$input = [1];
//$k = 2;


$count = count($input);

$sumArray = [];

for ($r = 1; $r <= $k; $r++) {

    if (isset($currentArr)) {

        $currentArr = switchPlaces($currentArr, $count);
    } else $currentArr = switchPlaces($input, $count);

    for ($i = 0; $i < count($input); $i++) {

        if (isset($sumArray[$i])) {

            $sumArray[$i] += $currentArr[$i];

        } else {

            $sumArray[$i] = $currentArr[$i];

        }

    }

}

function switchPlaces($arr, $count)
{

    $last = array_pop($arr);
    array_unshift($arr, $last);

    

    return $arr;

}

echo implode(' ', $sumArray);
