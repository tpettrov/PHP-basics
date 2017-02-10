<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/10/2017
 * Time: 2:27 PM
 */
$text = trim(fgets(STDIN));
$word = trim(fgets(STDIN));
//$text = 'This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)';
//$word = 'is';

$reggex = "/([^.?!]*\\b" . $word . "\\b[^.?!]*[.?!])/";

$matches = [];

preg_match_all($reggex, $text, $matches);

foreach ($matches[0] as $match) {



       echo trim($match)."\n";


}

//var_dump($matches);