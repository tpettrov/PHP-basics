<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/9/2017
 * Time: 19:25
 */


$input = explode(' ', 'Sofia 20 Varna 3 Sofia 5 Varna 4');
$printArray = [];

//print_r($input);

    for ($i=0; $i < count($input) - 1; $i+=2) {

        list($town, $income) = [$input[$i], intval($input[$i+1])];

        if (isset($printArray[$town])) {

            $printArray[$town] += $income;
        } else {

            $printArray[$town] = $income;
        }

    }

    print_r($printArray);