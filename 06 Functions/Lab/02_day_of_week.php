<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/12/2017
 * Time: 12:31
 */
  $day = trim(fgets(STDIN));
//$day = "";

echo getDayNumber($day);

function getDayNumber ($day) {

    if ($day == 'Monday' || $day == 'Tuesday' || $day == 'Wednesday' || $day == 'Thursday' || $day == 'Friday' || $day == 'Saturday'
        || $day == 'Sunday') {

        return $day_of_week = date('N', strtotime($day));
    }
    else return 'error';

}

