<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/2/2017
 * Time: 4:04 PM
 */

$input = explode(' ', trim(fgets(STDIN)));
//$input = explode(' ', '2 1 1 2 3 3 2 2 2 1');

$inputR = array_map('intval', $input);

$size = count($input);
$maxLength = 0;


for ($i = 0; $i < $size; $i++) {

   $currentLength = 1;

   for ($k = $i + 1; $k < $size; $k++) {

       if ($inputR[$k] == $inputR[$i]) {

           $currentLength++;

       } else break;

   }

   if ($currentLength > $maxLength) {

       $maxLength = $currentLength;
       $num = $inputR[$i];
   }


}

$resultArr = array_fill(0, $maxLength, $num);
echo implode(' ', $resultArr);