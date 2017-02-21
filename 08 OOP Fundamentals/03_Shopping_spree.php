<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/20/2017
 * Time: 22:56
 */
class Person
{

    private $name;
    private $money;
    private $bag = [];

    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);

    }

    private function setName(string $name)
    {
        Helper::validateName($name);
        $this->name = $name;

    }

    private function setMoney(float $money)
    {

       Helper::validateMoney($money);
       $this->money = $money;
    }


}

class Product
{

    private $name;
    private $cost;


    public function __construct(string $name, float $cost)
    {
        $this->setName($name);
        $this->cost = $cost;

    }

    private function setName($name){

        Helper::validateName($name);
        $this->name = $name;
    }

    private function setCost($cost){

        Helper::validateMoney($cost);
        $this->cost = $cost;
    }




}

try {

    $person = new Product('d', 23);

} catch (Exception $e) {

    echo $e->getMessage();
}

class Helper
{

    public static function validateName(string $name)
    {

        if (empty($name)) {

            throw new Exception('Name cannot be empty');
        }
    }

    public static function validateMoney(float $money)
    {

        if ($money < 0) {

            throw new Exception('Money cannot be negative');
        }
    }
}