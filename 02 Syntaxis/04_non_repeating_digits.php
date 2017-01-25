<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 1/25/2017
 * Time: 4:12 PM
 */

$var = 247;

if ($var < 100) {

    echo 'No.';
} else {

    for ($i = 100; $i<=$var; $i++) {

        $arrayNum = array_map('intval', str_split($i));

        if(count(array_unique($arrayNum)) >= 3) {

            echo "$i, ";
        }
    }

}