<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/12/2017
 * Time: 20:39
 */

list($x1,$y1,$x2,$y2)  = array_map('intval', explode(', ', trim(fgets(STDIN))));

echo calcAndValidate($x1, $y1);
echo calcAndValidate($x2, $y2);
echo calcAndValidate($x1, $y1, $x2, $y2);


function calcAndValidate($x1, $y1 , $x2 = 0, $y2 = 0 ) {

     $distance = sqrt(pow($x2 - $x1, 2)+ pow($y2 - $y1, 2));


    if (round($distance) == $distance) {

        return "{{$x1}}, {{$y1}} to {{$x2}}, {{$y2}} is valid" . "\n";

    } else {

        return "{{$x1}}, {{$y1}} to {{$x2}}, {{$y2}} is invalid" . "\n";

    }

}

