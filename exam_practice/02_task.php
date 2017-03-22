<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/22/2017
 * Time: 9:34 AM
 */
$strForEncrypt = $_GET['string']; //unencrypted string
$key = $_GET['key']; // int key for number of rotations

//$strForEncrypt = 'zibxle-SutFA';
//$key = 3;

$smallLetAlphabet = [];
$bigLetAlphabet = [];


for ($i = 0; $i <= 25; $i++){

    $smallLetAlphabet[$i] = chr($i + 97);
}

for ($i = 0; $i <= 25; $i++){

    $bigLetAlphabet[$i] = chr($i + 65);
}


$strArrForEnc = str_split($strForEncrypt);

foreach ($strArrForEnc as $currKey=>$char) {

    $small = ord($char) - 97;

    if ($small >= 0 && $small<= 25) {


        $strArrForEnc[$currKey] = $smallLetAlphabet[($small + $key) % 26];

    }

    if (ord($char) - 65 >= 0 && ord($char) - 65 <= 25) {


        $strArrForEnc[$currKey] = $bigLetAlphabet[((ord($char) - 65) + $key) % 26];

    }


}

echo implode('', $strArrForEnc);

