<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/10/2017
 * Time: 1:34 PM
 */


$text = trim(fgets(STDIN));
$banlist = explode(', ', trim(fgets(STDIN)));
$replacementArray = [];

foreach ($banlist as $banword) {

    array_push($replacementArray, str_repeat('*', strlen($banword)));

}


$text = str_replace($banlist, $replacementArray, $text);

echo $text;



