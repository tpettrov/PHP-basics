<?php

/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/16/2017
 * Time: 11:16 AM
 */
class Person
{
    private $name;
    private $company;
    private $car;
    private $pokemons = [];
    private $parents = [];
    private $children = [];

    public function __construct($name)
    {

        $this->name = $name;

    }

    public function setCompany(string $companyName, string $department, float $salary)
    {

        $this->company = new Company($companyName, $department, $salary);

    }

    public function setCar(string $carModel, int $carSpeed)
    {

        $this->car = new Car($carModel, $carSpeed);

    }

    public function addPokemon(string $name, string $type)
    {

        $this->pokemons[] = new Pokemon($name, $type);

    }

    public function addParent(string $name, string $birthday)
    {

        $this->parents[] = new Parrent($name, $birthday);

    }

    public function addChild(string $name, string $birthday)
    {

        $this->children[] = new Child($name, $birthday);

    }

    public function __toString()
    {
        $stringPokemon = '';
        foreach ($this->pokemons as $pokemon) {

            $stringPokemon .= $pokemon;
        }

        $stringParents = '';
        foreach ($this->parents as $parent) {

            $stringParents .= $parent;
        }

        $stringChildren = '';
        foreach ($this->children as $child) {

            $stringChildren .= $child;
        }

        $company = $this->company ? $this->company . PHP_EOL : null;
        $car = $this->car ? $this->car . PHP_EOL : null;

        return $this->name . PHP_EOL . 'Company:' . PHP_EOL . $company . 'Car:' . PHP_EOL . $car
            . 'Pokemon:' . PHP_EOL . $stringPokemon . 'Parents:' . PHP_EOL . $stringParents . 'Children:' . PHP_EOL . $stringChildren;
    }


}

class Car
{

    public $carModel;
    public $carSpeed;


    public function __construct(string $carModel, int $carSpeed)
    {
        $this->carModel = $carModel;
        $this->carSpeed = $carSpeed;

    }

    public function __toString()
    {
        return $this->carModel . " " . $this->carSpeed;
    }
}

class Parrent
{

    public $name;
    public $birthday;


    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;

    }

    public function __toString()
    {
        return $this->name . " " . $this->birthday . PHP_EOL;
    }
}


class Child
{

    public $name;
    public $birthday;


    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;

    }

    public function __toString()
    {
        return $this->name . " " . $this->birthday . PHP_EOL;
    }
}

class Pokemon
{

    public $name;
    public $type;


    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;

    }

    public function __toString()
    {
        return $this->name . " " . $this->type . PHP_EOL;
    }
}

class Company
{

    public $companyName;
    public $department;
    public $salary;

    public function __construct(string $companyName, string $department, float $salary)
    {
        $this->companyName = $companyName;
        $this->department = $department;
        $this->salary = $salary;
    }

    public function __toString()
    {
        return $this->companyName . " " . $this->department . " " . number_format($this->salary, 2);
    }
}

$people = [];

while (true) {

    $input = explode(' ', trim(fgets(STDIN)));

    if ($input[0] == 'End') {
        break;
    }

    $property = $input[1];
    $name = $input[0];

    switch ($property) {

        case 'company':
            if (array_key_exists($name, $people)) {

                $people[$name]->setCompany($input[2], $input[3], floatval($input[4]));
            } else {

                $people[$name] = new Person($name);
                $people[$name]->setCompany($input[2], $input[3], floatval($input[4]));
            }
            break;

        case 'car':
            if (array_key_exists($name, $people)) {

                $people[$name]->setCar($input[2], intval($input[3]));
            } else {

                $people[$name] = new Person($name);
                $people[$name]->setCar($input[2], intval($input[3]));
            }
            break;

        case 'pokemon':
            if (array_key_exists($name, $people)) {

                $people[$name]->addPokemon($input[2], $input[3]);
            } else {

                $people[$name] = new Person($name);
                $people[$name]->addPokemon($input[2], $input[3]);
            }
            break;

        case 'parents':
            if (array_key_exists($name, $people)) {

                $people[$name]->addParent($input[2], $input[3]);
            } else {

                $people[$name] = new Person($name);
                $people[$name]->addParent($input[2], $input[3]);
            }
            break;
        case 'children':
            if (array_key_exists($name, $people)) {

                $people[$name]->addChild($input[2], $input[3]);
            } else {

                $people[$name] = new Person($name);
                $people[$name]->addChild($input[2], $input[3]);
            }
            break;
    }


}



$targetPerson = $people[trim(fgets(STDIN))];
echo $targetPerson;

