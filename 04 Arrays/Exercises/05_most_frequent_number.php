<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/8/2017
 * Time: 1:16 PM
 */

$input = explode(' ', trim(fgets(STDIN)));
//$input = explode(' ', '7 7 7 0 2 2 2 0 10 10 10');

    $counts = array_count_values($input); // get the number of repeats of each element

    arsort($counts); // sort the number of repeats

    $unique = array_unique($counts); // remove the repeated repeats

    $max =  max($unique); // get the most repeated value

    echo array_search($max, $unique); // print the 'key' of $counts with most repeats after searching in the unique array of repeated values
