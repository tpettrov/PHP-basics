<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/8/2017
 * Time: 3:08 PM
 */

$input = strtolower(trim(fgets(STDIN)));

//$input = 'softuni';
$inputArray = str_split($input);

$smallLettersArray = range('a', 'z');
//print_r($smallLettersArray);

foreach ($inputArray as $letter) {

    echo $letter . ' -> ' . array_search($letter, $smallLettersArray) . "\n";


}
