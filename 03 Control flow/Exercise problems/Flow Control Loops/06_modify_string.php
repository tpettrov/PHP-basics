<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 1/30/2017
 * Time: 1:21 PM
 */

if (isset($_GET['submit']) && (!empty($_GET['input']))) {

    $inputStr = $_GET['input'];
    $command = $_GET['radio'];

    switch ($command) {

        case 'palindrome':
            if (isPalindrome($inputStr)) {
                $output = "$inputStr is Palindrome!";
            } else $output = "$inputStr is not Palindrome!";
            break;
        case 'reverse':
            $output = strrev($inputStr);
            break;
        case 'split': $output = splitter($inputStr);
            break;
        case 'hash':
            break;
        case 'shuffle':
            break;
        default:
            break;

    }


}

include '06_modify_string_html.php';

function isPalindrome($str)
{
    $strToArr = str_split($str);
    $strLen = count($strToArr);

    for ($i = 0; $i < $strLen / 2; $i++) {

        if ($strToArr[$i] == $strToArr[($strLen - 1) - $i]) {

            return true;
        } else return false;

    }

}

function splitter($str){

    $arrayForPrint = array_filter(str_split($str));
    return implode(' ', $arrayForPrint);
}

