<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/8/2017
 * Time: 22:12
 */

$input = explode(' ', trim(fgets(STDIN)));

//$input = explode(' ', '123 234 12');
$sum = 0;

foreach ($input as $num) {


    $sum += implode('', array_reverse(str_split($num)));
    //echo $sum . '\\';

}
echo $sum;