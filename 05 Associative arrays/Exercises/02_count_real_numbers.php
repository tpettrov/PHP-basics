<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/9/2017
 * Time: 23:15
 */

$input = explode(' ', trim(fgets(STDIN))); // get array of the passed elements

$counts = [];

foreach ($input as $num) {

    if (isset($counts[$num])) {

        $counts[$num]++;

    } else {

        $counts[$num] = 1;

    }

}

ksort($counts, SORT_NUMERIC);
foreach ($counts as $num => $repeats) {

    echo "$num" . ' -> ' . "$repeats" . ' times' . "\n";
}



