<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 1/25/2017
 * Time: 3:51 PM
 */

$variable = (object)[2,34];
//$variable = array(1,2,3);

if(is_numeric($variable)) {

    echo var_dump($variable);

} else {

    echo gettype($variable);


}