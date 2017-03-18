<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/17/2017
 * Time: 00:09
 */

$today = new DateTime(str_replace('/', '-', $_GET['today']));

//$today = new DateTime(str_replace('/', '-', '07/08/2014'));
//$input = ["11/05/2013 | Sopharma | Paracetamol | 20.54 lv", "11/05/2013 | Sopharma | Analgin | 57.45 lv", "02/12/2011 | Actavis | Aulin | 120.54 lv", "13/05/2009 | Sopharma | Tamiflu | 221.54 lv", "23/01/2014 | Actavis | Paracetamol | 7.54 lv", "11/05/2013 | Actavis | Paracetamol | 17.54 lv"];

$input = $_GET['invoices'];

$matrix = [];


foreach ($input as $invoice) {

    $invoice = trim($invoice, '"');
    $tokens = explode('|', $invoice);
    $date = new DateTime(str_replace('/', '-', trim($tokens[0])));
    $diff = $today->diff($date)->format('%y');

    if ($diff > 5 || $diff < 0 || $today < new DateTime(str_replace('/', '-', trim($tokens[0])))) {

        continue;
    }

    $now = new DateTime($date->format('d') . '-' . $date->format('m') . '-' . $today->format('Y'));
    if ($diff == 5 && $now < $today) {
        continue;
    }


    //$date = trim($tokens[0]);
    $company = trim($tokens[1]);
    $drug = trim($tokens[2]);
    $price = floatval(trim($tokens[3]));

        $matrix[$date->format('d-m-Y')][$company]['drugs'][] = $drug;

    if(!isset($matrix[$date->format('d-m-Y')][$company]['price'])) {

        $matrix[$date->format('d-m-Y')][$company]['price'] = $price;
    } else {

        $matrix[$date->format('d-m-Y')][$company]['price'] += $price;
    }


}



 uksort($matrix, 'dateSorter');

function dateSorter($date1, $date2)
{

    $dateA = new DateTime(str_replace('/', '-', $date1));
    $dateB = new DateTime(str_replace('/', '-', $date2));

    if ($dateA < $dateB) {

        return -1;

    } else if ($dateA > $dateB) {

        return 1;

    } else return 0;


}

//print_r($matrix);



$output = '<ul>';

foreach ($matrix as $date=>$info) {

    $date = str_replace("-", "/", $date);

 $output .= '<li>' . '<p>' . $date . '</p>';
 $output .= '<ul>';


    uksort($info, function ($a, $b){

        return strcmp($a,$b);
    });


 foreach ($info as $pharmacy=>$data) {

     //var_dump($pharmacy);

     $output .= '<li><p>' .  $pharmacy . '</p>';
     $output .= '<ul>';

     sort($data['drugs']);

     $output .= '<li><p>' . implode(',', $data['drugs']) . '-' . $data['price'] . 'lv'. '</p></li>';
     $output .= '</ul>';
     $output .= '</li>';


 }

    $output .= '</ul>';
    $output .= '</li>';

}


$output .= '</ul>';

echo $output;