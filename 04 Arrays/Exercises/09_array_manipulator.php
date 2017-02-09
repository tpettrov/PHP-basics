<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/9/2017
 * Time: 9:49 AM
 */

$input = explode(' ', trim(fgets(STDIN)));
//$input = explode(' ', '1 2 3 4 5');

while (true) {

    $command =  explode(' ',trim(fgets(STDIN)));
 //$command = explode(' ', 'addMany 5 9 8 7 6 5');
    if($command[0] == 'print') {

        $printArray = implode(', ', $input);
        echo "[$printArray]";
        break;

    } else {


        switch ($command[0]) {

            case 'add': $input = adder($command[1], $command[2], $input);
                break;
            case 'addMany': $input = adder($command[1], array_slice($input, 1), $input);
                break;
            case 'contains': if (in_array($command[1], $input)) {
                echo array_search($command[1], $input). "\n";
            } else echo '-1'. "\n";
                break;
            case 'remove': array_splice($input, $command[1], 1);
                break;
            case 'shift':
                break;
            case 'sumPairs':
                break;
            default: break;

        }



    }

}

function adder($index, $element, $input) {

   array_splice($input, $index, 0, $element);
    return $input;
}

