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

    public function buy(Product $product)
    {

        array_push($this->bag, $product);
        $this->money -= $product->getCost();

    }

    public function checkBalance(float $price)
    {

        // return true if has money, else return false

        if ($this->money >= $price) {

            return true;
        } else {
            return false;
        }
    }

    public function __toString()
    {
        $productsPrint = [];
        $products = '';
        foreach ($this->bag as $product) {

            array_push($productsPrint, $product->getName());
        }

        if (empty($productsPrint)) {

            $products = 'Nothing bought';
        } else {

            $products = implode(',', $productsPrint);
        }

        return $this->name . ' - ' . $products . PHP_EOL;

    }


}

class Product
{

    private $name;
    private $cost;


    public function __construct(string $name, float $cost)
    {
        $this->setName($name);
        $this->setCost($cost);

    }

    private function setName(string $name)
    {

        Helper::validateName($name);
        $this->name = $name;
    }

    private function setCost(float $cost)
    {

        Helper::validateMoney($cost);
        $this->cost = $cost;
    }

    public function getCost()
    {

        return $this->cost;
    }

    public function getName()
    {

        return $this->name;
    }


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

$people = [];
$products = [];

$peopleLine = explode(';', trim(fgets(STDIN)));
$productLine = explode(';', trim(fgets(STDIN)));


$flag = true;

try {
    $people = inputBuilder($peopleLine, 'Person');
    $products = inputBuilder($productLine, 'Product');
} catch (Exception $e) {

    echo $e->getMessage();
    $flag = false;
}

function inputBuilder(array $inputArray, string $type)
{

    $outputArray = [];

    foreach (array_filter($inputArray) as $element) {

        $data = explode('=', $element);
        $outputArray[$data[0]] = new $type($data[0], $data[1]);

    }

    return $outputArray;

}


if ($flag) {

    $input = trim(fgets(STDIN));

    while ($input != 'END') {


        $commands = explode(' ', $input);

        $personBuying = $commands[0];
        $productWanted = $commands[1];


        if ($people[$personBuying]->checkBalance($products[$productWanted]->getCost())) {

            $people[$personBuying]->buy($products[$productWanted]);
            echo "$personBuying bought $productWanted" . PHP_EOL;
        } else {

            echo "$personBuying can't afford $productWanted" . PHP_EOL;
        }


        $input = trim(fgets(STDIN));
    }

    foreach ($people as $person) {

        echo $person;

    }


}

