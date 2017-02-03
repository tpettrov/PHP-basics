<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/3/2017
 * Time: 11:22 AM
 */

$input = explode(' ', trim(fgets(STDIN)));
//$input = explode(' ', '0 1 1 2 2 3 3');

$currentEm = intval($input[0]);
$currentLen = 1;
$startPos = 0;
$maxLen = 1;

for($i = 1; $i < count($input); ++$i) {

    if ($input[$i] == $currentEm + 1) {

        $currentEm = $input[$i];
        $currentLen++;


        if ($currentLen > $maxLen) {

            $maxLen = $currentLen;
            $startPos = $i - ($currentLen - 1);

        }

    } else {

        $currentEm = $input[$i];
        $currentLen = 1;
        //$startPos = $i;

    }

}

//echo $startPos;
//echo $maxLen;

echo implode(' ', array_splice($input, $startPos, $maxLen));

