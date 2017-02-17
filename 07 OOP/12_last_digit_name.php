<?php

/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/17/2017
 * Time: 1:13 PM
 */
class Number
{

    private $num;

    public function getEnglishName()
    {
        $arrNums = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
        $lastNum = intval(substr("$this->num", -1));

        return $arrNums[$lastNum];
    }

    public function __construct($num)
    {

        $this->num = $num;
    }

}

$num = new Number(trim(fgets(STDIN)));

echo $num->getEnglishName();

