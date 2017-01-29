<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/28/2017
 * Time: 20:03
 */

$fruit = $argv[1];

switch ($fruit) {

    case ($fruit == 'banana') || ($fruit == 'apple') || ($fruit == 'kiwi') || ($fruit == 'cherry') ||
        ($fruit == 'lemon') || ($fruit == 'grapes') || ($fruit == 'peach'):
        echo 'Fruit';
        break;

    case ($fruit == 'tomato') || ($fruit == 'cucumber') || ($fruit == 'pepper') || ($fruit == 'onion') ||
        ($fruit == 'garlic') || ($fruit == 'parsley') :
        echo 'vegetable';
        break;

    default:
        echo 'unknown';

}