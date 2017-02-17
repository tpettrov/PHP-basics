<?php

/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/17/2017
 * Time: 2:21 PM
 */
class Fibonacci
{


    public function getNumbersInRange(int $start, int $end)
    {

        $newArr = [];

        for ($i = $start; $i < $end; $i++) {

            array_push($newArr, self::getFib($i));

        }

        return implode(', ', $newArr);

    }

    public static function getFib($n)
    {
        return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
    }


}


$fib = new Fibonacci();
$start = intval(trim(fgets(STDIN)));
$end = intval(trim(fgets(STDIN)));

echo $fib->getNumbersInRange($start, $end);