<?php

/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/17/2017
 * Time: 1:51 PM
 */
class DecimalNumber
{

    private $num;

    public function __construct($num)
    {

        $this->num = $num;

    }

    public function __toString()
    {
        return strrev($this->num);
    }


}

echo $num = new DecimalNumber(trim(fgets(STDIN)));