<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/13/2017
 * Time: 11:43 AM
 */

list($x1, $y1, $x2, $y2, $x3, $y3) = array_map('floatval', explode(', ', trim(fgets(STDIN))));


function distanceCalc(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
{

    $A = sqrt(($x1 - $x2) * ($x1 - $x2) + ($y1 - $y2) * ($y1 - $y2));
    $B = sqrt(($x2 - $x3) * ($x2 - $x3) + ($y2 - $y3) * ($y2 - $y3));
    $C = sqrt(($x1 - $x3) * ($x1 - $x3) + ($y1 - $y3) * ($y1 - $y3));

    $max = max($A, $B, $C);

    $print = "";
    if ($C === $max) {
        $print = '1->2->3: ' . ($A + $B);
    } else if ($B === $max) {
        $print = '2->1->3: ' . ($A + $C);

    } else if ($A === $max) {
        $print = '1->3->2: ' . ($B + $C);
    }
    return $print;

}

echo distanceCalc($x1, $y1, $x2, $y2, $x3, $y3);
