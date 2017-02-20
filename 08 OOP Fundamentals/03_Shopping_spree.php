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
        $this->name = self::setName($name);
        $this->money = self::setMoney($money);

    }

    private function setName(string $name)
    {

        if (empty($name)) {

            throw new Exception('Name cannot be empty');
        } else {
            return $name;
        }

    }

    private function setMoney(float $money)
    {

        if ($money < 0) {

            throw new Exception('Money cannot be negative');
        } else {
            return $money;
        }

    }


}

class Product
{

    private $name;
    private $cost;


}

try {

    $person = new Person('d', -23);

} catch (Exception $e) {

    echo $e->getMessage();
}

