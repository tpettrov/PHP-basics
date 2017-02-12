<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/11/2017
 * Time: 20:44
 */

$input = trim(fgets(STDIN));
//$input = 'abbaa';

echo isPalindrome($input);

function isPalindrome($string){

    for ($i = 0 ; $i < strlen($string) / 2; $i++) {

        if ($string[$i] != $string[strlen($string) - 1 - $i]) {

            return 'false';

        }
    }
    return 'true';
}