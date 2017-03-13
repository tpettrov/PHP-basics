<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/13/2017
 * Time: 21:08
 */

if (isset($_GET['data'])) {

    $inputLine = trim($_GET['data']);

    $arrayOfCommands = array_map(function ($a) {

        return trim($a);

    }, explode(',', $inputLine));

    $gold = 0;
    $silver = 0;
    $diamonds = 0;


    foreach ($arrayOfCommands as $command) {

        $cmdCandidate = explode(' ', $command);

        if ($cmdCandidate[0] == 'mine' && count($cmdCandidate) == 4) {

            switch (strtolower($cmdCandidate[2])) {

                case 'gold':
                    $gold += intval($cmdCandidate[3]);
                    break;
                case 'silver':
                    $silver += intval($cmdCandidate[3]);
                    break;
                case 'diamonds':
                    $diamonds += intval($cmdCandidate[3]);
                    break;


            }

        }


    }

    $output = '';

    $output .= '<p>*Gold: ' . $gold . '</p>' .
        '<p>*Silver: ' . $silver . '</p>' .
        '<p>*Diamonds: ' . $diamonds . '</p>';

    echo $output;


}

