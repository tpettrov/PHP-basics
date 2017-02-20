<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/19/2017
 * Time: 15:48
 */
class DateModifier
{

    private $diff;

    public function getDiff($dateOne, $dateTwo)
    {

        $date1 = date_create($dateOne);
        $date2 = date_create($dateTwo);

        $this->diff = date_diff($date1, $date2);
        return $this->diff->format('%a');

    }


}

$date1 = explode(' ', trim(fgets(STDIN)));
$date2 = explode(' ', trim(fgets(STDIN)));
$dateOne = implode('-', $date1);
$dateTwo = implode('-', $date2);

$dateModifier = new DateModifier();
echo $dateModifier->getDiff($dateOne, $dateTwo);
