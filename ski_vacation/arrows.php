<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 5/9/2017
 * Time: 1:27 PM
 */

$_GET = [
    'arrows' => '>>>----->>asd>ds>----->dasd>>>----->>',
    'arrows1' => '>>>----->>a>>----->sd>>>-----s>----->dasd>>>----->>',
    'arrows2' => '>>>------>sd>>>----ds>----->dasd>>>----->>',
    'arrows3' => '>>>----->sd>>>----->>asds>----->dasd>>>----->>'

];

$smallArrow = '>----->';
$medArrow = '>>----->';
$bigArrow = '>>>----->>';

$smallCount = 0;
$medCount = 0;
$bigCount = 0;

foreach ($_GET as $key => $value) {

    if (substr_count($value, $bigArrow) != 0) {

        $bigCount += substr_count($value, $bigArrow);
        $value = str_replace($bigArrow, '%', $value);

    }

    if (substr_count($value, $medArrow) != 0) {

        $medCount += substr_count($value, $medArrow);
        $value = str_replace($medArrow, '%', $value);
    }


    if (substr_count($value, $smallArrow) != 0) {

        $smallCount += substr_count($value, $smallArrow);
        $value = str_replace($smallArrow, '%', $value);
    }


}


 $stringedNum = $smallCount . $medCount . $bigCount;

$binaryStringedNum = decbin(intval($stringedNum));
$reversed = strrev($binaryStringedNum);

$concateneted = $binaryStringedNum . $reversed;

echo bindec($concateneted);
