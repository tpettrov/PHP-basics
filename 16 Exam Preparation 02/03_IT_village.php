<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/18/2017
 * Time: 15:45
 */

$board = $_GET['board'];
$beginning = explode(' ', $_GET['beginning']);
$moves = explode(' ', $_GET['moves']);

//$board = 'P I F S | P 0 0 F | N 0 0 V | I F F I';
//$beginning = explode(' ', '2 1');
//$moves = explode(' ', '5 11 9 8 6 8 4');

$gameBoard = array_map(function ($el) {

    $trimEl = trim($el);
    return explode(' ', $trimEl);

}, explode('|', $board));

$startRow = $beginning[0];
$startCol = $beginning[1];


$gameString = implode('', $gameBoard[0]) . $gameBoard[1][3] . $gameBoard[2][3] . strrev(implode('', $gameBoard[3])) . $gameBoard[2][0] . $gameBoard[1][0];

$coins = 50;
$ins = substr_count($gameString, 'I');

$insBought = 0;
$haveIns = false;
$pos = 0;

if ($startRow == 1 || $startCol == 4) {

    $pos = ($startRow + $startCol) - 2;
} else if ($startRow == 4 || $startCol == 1) {

    $pos = 14 - ($startRow + $startCol);
}

for ($i=0; $i < count($moves); $i++) {


    $pos += $moves[$i];
    if ($haveIns) {

        $coins += 20 * $insBought;
    }

    switch ($gameString[$pos % 12]) {

        case 'P':
            $coins -= 5;
            gameStatus($coins, $ins);
            break;
        case 'I':
            if ($coins >= 100) {
                $coins -= 100;
                $ins -= 1;
                $insBought += 1;
                $haveIns = true;
                gameStatus($coins, $ins);
            } else {

                $coins -= 10;
                gameStatus($coins, $ins);
            }
            break;
        case 'F': $coins += 20;
            break;
        case 'S': $i +=2;
            break;
        case 'V': $coins *= 10;
            break;
        case 'N': echo "<p>You won! Nakov's force was with you!<p>";
        exit;
            break;


    }

    if ($i == count($moves) - 1) {

        echo "<p>You lost! No more moves! You have {$coins} coins!<p>";
        exit;
    }




}




function gameStatus($coins, $ins){

    if ($coins < 0) {

        echo '<p>You lost! You ran out of money!<p>';
        exit;
    } else if ($ins < 1) {

        echo "<p>You won! You own the village now! You have {$coins} coins!<p>";
        exit;
    }

}


