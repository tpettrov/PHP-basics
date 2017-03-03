<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/26/2017
 * Time: 10:39
 */
interface Buyer
{

    public function BuyFood();
    public function getFood();
    public function getName();

}

interface Birthtable
{

    public function hasBirthday(string $year);

    public function getBirthday(): string;

}

abstract class BirthdayCandidates
{
    protected $food = 0;
    private $id;

    /**
     * Immigrant constructor.
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }


    /**
     * @param string $date
     * @return bool
     */
    public function hasBirthday(string $date)
    {

        if (strpos($this->getBirthday(), $date)) {

            return true;

        }
    }

    public function getId()
    {

        return $this->id;
    }


}


class Robot extends BirthdayCandidates implements Birthtable
{

    private $model;

    public function __construct(string $model, string $id)
    {
        parent::__construct($id);

        $this->model = $model;
    }


    public function getBirthday(): string
    {
        return;
    }
}

class Citizen extends BirthdayCandidates implements Birthtable, Buyer
{
    private $name;
    private $age;
    private $birthday;

    public function __construct(string $name, string $age, string $id, string $birthday)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->age = $age;
        $this->birthday = $birthday;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function BuyFood()
    {
        $this->food += 10;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Pet extends BirthdayCandidates implements Birthtable
{

    private $birthday;
    private $name;

    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;

    }


    public function getBirthday(): string
    {
        return $this->birthday;
    }
}

class Rebel extends BirthdayCandidates implements Buyer
{
    private $name;
    private $age;
    private $group;


    public function __construct(string $name, string $age, string $group)
    {

        $this->name = $name;
        $this->age = $age;
        $this->group = $group;

    }

    public function BuyFood()
    {
        return $this->food += 5;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function getName()
    {
        return $this->name;
    }
}


$foodBuyed = 0;
$foodBuyers = [];

$buyersCount = trim(fgets(STDIN));

for ($i=0; $i < $buyersCount; $i++) {

    $tokens = explode(' ', trim(fgets(STDIN)));

    if (count($tokens) == 4) {

        $foodBuyers[] = new Citizen($tokens[0], $tokens[1], $tokens[2], $tokens[3]);
    } else if (count($tokens) == 3) {

        $foodBuyers[] = new Rebel($tokens[0], $tokens[1], $tokens[2]);
    }


}

$input = trim(fgets(STDIN));

while($input != 'End') {

    $potentialBuyer = $input;

    foreach ($foodBuyers as $foodBuyer) {

        if ($foodBuyer->getName() == $potentialBuyer) {

            $foodBuyer->BuyFood();

        }

    }

    $input = trim(fgets(STDIN));


}

foreach ($foodBuyers as $foodBuyer) {

   $foodBuyed += $foodBuyer->getFood();

}


echo $foodBuyed;