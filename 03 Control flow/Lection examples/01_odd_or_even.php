<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/28/2017
 * Time: 18:58
 */
//$num = $_GET['num']; only JUDGE submit

$num = 6;
$remainder = fmod($num, 2);

if ($remainder == 0) {

    echo 'even';

} else if ($remainder == round($remainder)) {

    echo "odd";


} else {

    echo 'invalid';
}