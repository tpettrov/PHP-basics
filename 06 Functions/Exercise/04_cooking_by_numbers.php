<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/12/2017
 * Time: 18:03
 */

$num = trim(fgets(STDIN));
$cmdArray = explode(', ', trim(fgets(STDIN)));


main($cmdArray, $num);

function main($cmdArray, $num)
{

    foreach ($cmdArray as $cmd) {

        echo $num = cook($cmd, $num)."\n";

    }
}

function cook($cmd, $num) {

    switch ($cmd) {

        case 'chop': return $num / 2;
        break;
        case 'dice': return sqrt($num);
            break;
        case 'spice': return $num + 1;
            break;
        case 'bake': return $num * 3;
            break;
        case 'fillet': return $num - ($num * 0.2);
            break;


    }

}