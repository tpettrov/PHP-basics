<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 1/27/2017
 * Time: 10:01 AM
 */

    $currentYear = getDate()['year'];
    $currentYear++;

    $currentTime = new DateTime('now');
    $newYear = new DateTime("$currentYear-01-01");

    $diff = date_diff($currentTime, $newYear);

    //var_dump($diff);

    $days = $diff->format('%a');
    $hourss = $diff->format('%m');
    $minutess = $diff->format('%i');
    $secondss = $diff->format('%s');
    $hours = $days * 24;
    $minutes = $hours * 60;
    $seconds = $minutes * 60;

    $hoursFormatted = number_format($hours, 0, ' ', ' ');
    $minutesFormatted = number_format($minutes, 0, ' ', ' ');
    $secondsFormatted = number_format($seconds, 0, ' ', ' ');

echo "Hours until new year: {$hoursFormatted}\n";
echo "Minutes until new year: {$minutesFormatted}\n";
echo "Seconds until new year: {$secondsFormatted}\n";
echo "Days:Hours:Minutes:Seconds {$days}:{$hourss}:{$minutess}:{$secondss}";