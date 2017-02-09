<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/9/2017
 * Time: 20:47
 */

$input = explode(' ', 'I am student');
$resultString = '';

foreach ($input as $word) {

    $resultString .= $word;

}

echo strrev($resultString);