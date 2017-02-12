<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/12/2017
 * Time: 17:22
 */

$inputLineArr = explode(', ', trim(fgets(STDIN)));


function arrBuilder($inputLineArr){

    $size = count($inputLineArr);
    $qaArr = [];

    for ($i = 0; $i < $size; $i +=2) {

        $qaArr[$inputLineArr[$i]] = $inputLineArr[$i+1];

    }

    return $qaArr;

}

function xmlPrinter($qaArr) {

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $xml .="<quiz>\n";

    foreach ($qaArr as $q => $a) {

        $xml .= "  <question>\n   $q\n </question>\n";
        $xml .= "  <answer>\n    {$a}\n  </answer>\n";

    }

    $xml .= "</quiz>";

    return $xml;

}

$data = arrBuilder($inputLineArr);
echo xmlPrinter($data);
