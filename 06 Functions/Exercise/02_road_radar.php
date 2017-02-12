<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/12/2017
 * Time: 16:35
 */

$speed = trim(fgets(STDIN));
$area = trim(fgets(STDIN));


infractionMade($speed, $area);

function getSpeedLimit($area)
{

    switch ($area) {

        case 'motorway':
            return 130;
            break;
        case 'interstate':
            return 90;
            break;
        case 'city':
            return 50;
            break;
        case 'residential':
            return 20;
            break;

    }

}

function infractionMade($speed, $area)
{

    $severity = $speed - getSpeedLimit($area);

    switch ($severity) {

        case ($severity <= 20) && ($severity > 0):
            echo 'speeding';
            break;
        case ($severity <= 40) && ($severity > 20):
            echo 'excessive speeding';
            break;
        case ($severity > 40) :
            echo 'reckless driving';
            break;
        default: break;
    }

}