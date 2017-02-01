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
 * User: Toni
 * Date: 1/30/2017
 * Time: 20:48
 */

$array = [1,2,3,4,5,6];

    for ($i=0; $i< count($array) / 2; $i++) {

        echo $array[$i];
        echo $array[count($array) -1 - $i];

    }