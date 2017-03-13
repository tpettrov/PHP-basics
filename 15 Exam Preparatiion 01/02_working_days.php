<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/13/2017
 * Time: 22:04
 */

$dateStart = date_create($_GET['dateOne']);
$dateEnd = date_create($_GET['dateTwo']);

$holidays = array_map(function ($date) {

    try {
        return date_create(trim($date));
    } catch (Exception $e) {

    }

}, explode("\n", trim($_GET['holidays'])));


$interval = new DateInterval('P1D');
$dateRange = new DatePeriod($dateStart, $interval, $dateEnd);

$validDays = [];

foreach ($dateRange as $date) {


    if ( (!in_array($date, $holidays) && $date->format('D') != 'Sat') && ($date->format('D') != 'Sun')) {

        $validDays[] = $date->format('d-m-Y');

    }

}

if (count($validDays) > 0) {

    $output = '<ol>';

    foreach ($validDays as $date) {


        $output .= '<li>' . $date . '</li>';
    }

    $output .= '</ol>';

    echo $output;


}

else {

    echo '<h2>No workdays</h2>';
}

