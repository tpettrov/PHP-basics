<form method="get">
    <div>
        Input string:
        <input type="text" name="input">

    </div>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/1/2017
 * Time: 9:17 AM
 */


if (isset($_GET['submit']) && (!empty($_GET['input']))) {

    $array = explode(' ', $_GET['input']);

    $rows = count($array) / 3;
    $cols = count($array) / $rows;

    $arrayIndex = 0;
    $arraySize = count($array);

    $matrix = [];

    for ($row = 0; $row < $rows; $row++) {

        $matrix[$row] = [];

        for ($col = 0; $col < $cols; $col++) {

            $matrix[$row][$col] = $array[$arrayIndex];

            if ($arrayIndex < $arraySize - 1) {

                $arrayIndex++;
            } else break;

        }

    }/*echo '<pre>';
    print_r($matrix);
    echo '</pre>'*/;

    $biggest = $matrix[0][0];

    foreach ($matrix as $row) {

        foreach ($row as $element) {

            if ($element > $biggest) {

                $biggest = $element;
            }

        }

    }

    echo "Biggest number in the array is: $biggest";


}