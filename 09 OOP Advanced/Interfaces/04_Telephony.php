<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/25/2017
 * Time: 13:31
 */
interface Calling
{

    public function call($number): string;

}

interface Browsing
{

    public function browse($url): string;

}


class Smartphone implements Browsing, Calling
{

    private $phoneNums = [];
    private $sites = [];


    public function __construct(array $phoneNums, array $sites)
    {
        $this->setPhoneNum($phoneNums);
        $this->setSite($sites);
    }

    public function setPhoneNum(array $nums)
    {

        $this->phoneNums = $nums;


    }

    public function setSite(array $url)
    {

        $this->sites = $url;

    }

    public function call($number): string
    {

        if (ctype_digit($number)) {

            return 'Calling... ' . $number . PHP_EOL;
        } else {

            return 'Invalid number!' . PHP_EOL;
        }


    }

    public function browse($url): string
    {
        if (preg_match('/[0-9]/', $url) == 0) {

            return 'Browsing: ' . $url . '!' . PHP_EOL;
        } else

            return 'Invalid URL!' . PHP_EOL;
    }

    public function getNums()
    {

        return $this->phoneNums;
    }

    public function getUrls()
    {

        return $this->sites;
    }


}

$nums = explode(' ', trim(fgets(STDIN)));
$urls = explode(' ', trim(fgets(STDIN)));

$phone = new Smartphone($nums, $urls);

foreach ($phone->getNums() as $num) {

    echo $phone->call($num);
}

foreach ($phone->getUrls() as $url) {

    echo $phone->browse($url);
}