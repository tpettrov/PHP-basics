<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 1/26/2017
 * Time: 10:00 AM
 */

    $currentMonthFirstDay = new DateTime('first day of this month');
    $currentMonthLastDay = new DateTime('last day of this month');



    while ($currentMonthFirstDay <= $currentMonthLastDay) {

        if($currentMonthFirstDay->format("D") == "Sun")
        {
            echo $currentMonthFirstDay->format("jS M, Y") . "\n";
        }

        $currentMonthFirstDay->modify('+1 day');

    }