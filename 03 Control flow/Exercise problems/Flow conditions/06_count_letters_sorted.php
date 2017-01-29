<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 11:55
 */

$word = fgets(STDIN);

$arrayOfChars = [];
$wordArray = str_split(trim($word));

foreach ($wordArray as $char) {

    if (!array_key_exists($char, $arrayOfChars)) {

        $arrayOfChars[$char] = 0;
    }

    $arrayOfChars[$char]++;


}

arsort($arrayOfChars);

foreach ($arrayOfChars as $key => $value) {

    echo "$key -> $value \n";

}