<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 1/29/2017
 * Time: 21:38
 */
include '04_primes_html.php';
$array = [];

if (isset($_GET['print']) && (!empty($_GET['start']) && !empty($_GET['end']) )) {

    $start = intval($_GET['start']);
    $end = intval($_GET['end']);

    for ($i= $start; $i<=$end; $i++) {

        if(isPrime($i)){

            array_push($array,"<span><b>$i</b></span>" );
        } else array_push($array,"<span>$i</span>");

    }

    echo implode(", ",$array);

    }


function isPrime($num) {
    //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
    if($num == 1)
        return false;

    //2 is prime (the only even number that is prime)
    if($num == 2)
        return true;

    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0) {
        return false;
    }

    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    $ceil = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}