<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/2/2017
 * Time: 4:04 PM
 */

$input = explode(' ', trim(fgets(STDIN)));
//$input = explode(' ', '1 2');
$inputR = array_reverse($input);

$item = $inputR[0];
$count = 1;
$countMax = 1;
//$itemMax = $item;
$resultArr = [];

for($i = 1; $i < count($inputR); $i++) {

    if ($inputR[$i] == $item) {

        $count++;
        if ($count >= $countMax) {

            $countMax = $count;
            $itemMax = $inputR[$i];
        }
    }

    else {

        $item = $inputR[$i];
        $count = 1;
        //$itemMax = $item;

    }
}

if (count($inputR) == 1) {

    echo $inputR[0];

} else {

    for ($j = 0; $j < $countMax; $j++) {

        array_push($resultArr, $itemMax);
    }

    echo implode(' ', $resultArr);
}