<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/12/2017
 * Time: 15:59
 */

//$input = explode(', ', trim(fgets(STDIN)));
$input = explode(', ', '13.1, 50, 31.5, 50, 80, 50, -5, 18, 43');
$inputSize = count($input);

for ($i=0 ; $i<$inputSize; $i+=3) {

    list($x, $y, $z) = [$input[$i], $input[$i+1],$input[$i+2]];

    if (isInside($x, $y, $z)){

        echo 'inside'."\n";
    } else {
        echo 'outside'."\n";
    }
}


function isInside($x, $y, $z){

    $x1 = 10; $x2 = 50;
    $y1 = 20; $y2 = 80;
    $z1 = 15; $z2 = 50;

    if ($x >= $x1 && $x <= $x2) {

        if ($y >= $y1 && $x <= $y2) {

            if ($z >= $z1 && $x <= $z2) {

                return true;
            }
        }
    } else return false;



}