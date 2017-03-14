<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/14/2017
 * Time: 10:36 AM
 */

$text = trim($_GET['text']);
$lineLength = intval(trim($_GET['lineLength']));


$textSymbolsLength = strlen($text);

$textArrayChars = str_split($text, $lineLength);


$matrix = [];
$i = 0;

foreach ($textArrayChars as $row) {

        if(strlen($row) < 10) {

            $row = $row . str_repeat(' ', $lineLength - strlen($row) );
        }
        $matrix[$i] = str_split($row);
        $i++;

}


for($row = count($matrix) - 1; $row > 0 ; $row--) {

    for($col = 0; $col < $lineLength; $col++) {

        if ($matrix[$row][$col] == ' ') {

            if (emptyUpChecker($matrix, $row, $col)){

                        $currentRow = $row;
                        while ($currentRow > 0) {

                            if(emptyUpChecker($matrix, $currentRow,$col)) {
                                $currentRow--;
                                continue;
                            } else {

                                $matrix[$row][$col] = $matrix[$currentRow - 1][$col];
                                $matrix[$currentRow - 1][$col] = ' ';
                                break;

                            }


                        }


            } else {
                $matrix[$row][$col] = $matrix[$row - 1][$col];
                $matrix[$row - 1][$col] = ' ';
            }

        }


    }



}

//var_dump($matrix);

function emptyUpChecker($matrix, $row, $col){

    if ($matrix[$row - 1][$col] == ' ') {

        return true;
    } else return false;

}

$output = '<table>';

foreach ($matrix as $row) {

    $output .= '<tr>';


    foreach ($row as $char) {

        if($char == ' ') {
            $output .= '<td>' . htmlspecialchars(' ') . '</td>';

        } else {

            $output .= '<td>' . htmlspecialchars($char)  . '</td>';
        }

    }

    $output .= '</tr>';

}

$output .= '<table>';

echo $output;