<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 10:16
 */

$operation = $argv[1];

$num1  = intval(fgets(STDIN));
$num2  = intval(fgets(STDIN));

if ($operation == 'sum') {

    echo '== ' . ($num1 + $num2);
} else if ($operation == 'substract') {

    echo '== ' . ($num1 - $num2);
} else echo 'invalid operation';