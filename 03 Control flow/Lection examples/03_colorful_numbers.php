<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/28/2017
 * Time: 22:12
 */


$n = 10;

for ($i = 0; $i <= $n; $i++) {

    if ($i % 2 != 0) {

        echo "<li><span style='color:blue'>$i</span></li>";
    } else {

        echo "<li><span style='color:green'>$i</span></li>";
    }


}