<?php
//var_dump($argv);
$operation = $argv[1];

$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));

if($operation == 'sum'){

    echo $numberOne + $numberTwo;
}
else if($operation == 'substract') {


    echo $numberOne - $numberTwo;
}
else echo 'Invalid Operation';


