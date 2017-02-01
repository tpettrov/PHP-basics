<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/1/2017
 * Time: 2:45 PM
 */

for($i=0;$i<2;$i++){

    $input[$i] = fgets(STDIN);

}

$string1 = $input[0];
$string2 = $input[1];

//$string1 = 'hi php java csharp sql html css js';
//$string2 = 'hi php java js softuni nakov java learn';

//$string1 = 'hi php java xml csharp sql html css js';
//$string2 = 'nakov java sql html css js';

//$string1 = 'I love programming';
//$string2 = 'Learn Java or C#';


$largestCommonEnd = 0;
$currentLargestCommonEnd = 0;
$largestCommonEndR = 0;
$currentLargestCommonEndR = 0;

$array1 = explode(' ', $string1);
$array2 = explode(' ', $string2);

$rev1 = array_reverse($array1);
$rev2 = array_reverse($array2);

$sizeToIterate = min(count($array1), count($array2));

for ($i=0; $i < $sizeToIterate; $i++) {

    if ($array1[$i] == $array2[$i] ) {

        $currentLargestCommonEnd++;

        if ($currentLargestCommonEnd > $largestCommonEnd) {
            $largestCommonEnd = $currentLargestCommonEnd;
        }

    } else break;
}


for ($i=0; $i < $sizeToIterate; $i++) {

    if ($rev1[$i] == $rev2[$i]) {

        $currentLargestCommonEndR++;

        if ($currentLargestCommonEndR > $largestCommonEndR) {
            $largestCommonEndR = $currentLargestCommonEndR;
        }

    } else break;
}

echo max($largestCommonEnd, $largestCommonEndR);








