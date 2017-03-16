<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/16/2017
 * Time: 21:36
 */

const CPU_PRICE = 85;
const ROM_PRICE = 45;
const RAM_PRICE = 35;
const VIA_PRICE = 45;
const PC_PRICE = 420;

//$parts = 'CPU, RAM, VIA, ROM, RAM, RAM, CPU, CPU, CPU, VIA, ROM, ROM, CPU';

$parts = trim($_GET['list']);

$partsArray = explode(', ', $parts);

$partCountArr = [];

foreach ($partsArray as $part) {

    if (isset($partCountArr[$part])) {

        $partCountArr[$part]++;

    } else {

        $partCountArr[$part] = 1;
    }

}

if (count($partCountArr) != 4) {

    $pcMade = 0;
} else {

        $pcMade = min($partCountArr);


}

$soldPcGains = $pcMade * PC_PRICE;


$moneySpend = 0;

foreach ($partCountArr as $part=>$count) {

    if ($count >=5 ) {
        $discount = 2;
    } else {
        $discount = 1;
    }

    switch ($part) {

        case 'CPU':
            $moneySpend += $count * CPU_PRICE / $discount;
            break;
        case 'ROM':
            $moneySpend += $count * ROM_PRICE / $discount;
            break;
        case 'RAM':
            $moneySpend += $count * RAM_PRICE / $discount;
            break;
        case 'VIA':
            $moneySpend += $count * VIA_PRICE / $discount;
            break;

    }


}

foreach ($partCountArr as $part=>$count) {

    $partCountArr[$part] -= $pcMade;

    if ($partCountArr[$part] == 0) {

        unset($partCountArr[$part]);
    }
}

$soldPartsGains = 0;


foreach ($partCountArr as $part=>$count) {

    switch ($part) {

        case 'CPU':
            $soldPartsGains += $count * CPU_PRICE / 2;
            break;
        case 'ROM':
            $soldPartsGains += $count * ROM_PRICE / 2;
            break;
        case 'RAM':
            $soldPartsGains += $count * RAM_PRICE / 2;
            break;
        case 'VIA':
            $soldPartsGains += $count * VIA_PRICE / 2;
            break;

    }
}

$partsLeft = array_sum($partCountArr);


$allGains = $soldPartsGains + $soldPcGains;

$finalGain = $allGains - $moneySpend;

$output = '';
$output .= '<ul>';
$output .= '<li>' . $pcMade . ' computers assembled</li>';
$output .= '<li>' . $partsLeft . ' parts left</li>';
$output .= '</ul>';

if ($finalGain > 0) {
    $output .= '<p>Nakov gained ' . $finalGain . ' leva</p>';
} else {

    $output .= '<p>Nakov lost ' . $finalGain . ' leva</p>';
}

echo $output;