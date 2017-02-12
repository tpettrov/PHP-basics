<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/12/2017
 * Time: 19:09
 */

$num = trim(fgets(STDIN));

if (checker($num) == 'true') {

    echo $num;
} else {

    while (checker($num) == 'false') {

        $num = adder($num);
        if (checker($num) == 'true') {

            echo $num;
            break;
        }
    }

}



function checker($num) {

    $sum = 0;
    $size = strlen($num);

    foreach (str_split($num) as $number) {

        $sum += $number;
    }

    if ($sum / $size > 5 ) {

        return 'true';

    } else return 'false';

}

function adder($num) {

    return $num . '9';

}