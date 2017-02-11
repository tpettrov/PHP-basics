<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/3/2017
 * Time: 11:22 AM
 */

//$input = explode(' ', trim(fgets(STDIN)));
$input = explode(' ', '3 2 3 4 2 2 4');

$size = count($input);

$startPos = 0;
$maxLen = 0;

for ($i = 0; $i < $size; $i++) {

    $currentLength = 1;
    $current = $input[$i];

    for ($k = $i + 1; $k < $size; $k++) {

        if ($input[$k] > $current) {

            $currentLength++;
            $current = $input[$k];

        } else break;

    }

    if ($currentLength > $maxLen) {

        $maxLen = $currentLength;
        $startPos = $i;
    }


}


echo implode(' ', array_slice($input, $startPos, $maxLen));

