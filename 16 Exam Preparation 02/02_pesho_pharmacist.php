<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/17/2017
 * Time: 00:09
 */


$today = date_create_from_format('d/m/Y', '07/08/2014');

$input = ["11/05/2013 | Sopharma | Paracetamol | 20.54 lv", "11/05/2013 | Sopharma | Analgin | 57.45 lv", "02/12/2011 | Actavis | Aulin | 120.54 lv", "13/05/2009 | Sopharma | Tamiflu | 221.54 lv", "23/01/2014 | Actavis | Paracetamol | 7.54 lv", "11/05/2013 | Actavis | Paracetamol | 17.54 lv"];



foreach ($input as $invoice) {

    $invoice = trim($invoice, '"');
    $invoice = explode('|', $invoice);

    var_dump($invoice);

}




//$result = uksort($dateArr, 'dateSorter');

function dateSorter($date1, $date2)
{

    $dateA = DateTime::createFromFormat('d/m/Y', $date1);
    $dateB = DateTime::createFromFormat('d/m/Y', $date2);

    if ($dateA < $dateB) {

        return -1;

    } else if ($dateA > $dateB) {

        return 1;

    } else return 0;


}


//foreach ($dateArr as $date => $invoice) {
//
//    $diff = date_diff($today, DateTime::createFromFormat('d/m/Y', $date));
//
//    if (intval($diff->format('%y')) >= 5) {
//
//        unset($dateArr[$date]);
//    }
//
//
//}

