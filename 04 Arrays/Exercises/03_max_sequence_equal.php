<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/2/2017
 * Time: 4:04 PM
 */


$input = explode(' ', trim(fgets(STDIN)));
//$input = explode(' ', '0 1 1 5 2 2 6 3 3');
$inputR = array_reverse($input);


$item = $inputR[0];
$count = 1;
$countMax = 0;

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
    }
}

for($j = 0; $j < $countMax; $j++) {

    echo ' ';
    echo $itemMax;

}