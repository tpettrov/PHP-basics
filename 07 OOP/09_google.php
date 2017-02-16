<?php

/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/16/2017
 * Time: 11:16 AM
 */
class Person
{

    private $company;
    private $car;
    private $pokemons = [];
    private $parents = [];
    private $children = [];



    public function setCompany(string $companyName, string $department, int $salary)
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
}

class Company
{

    public $companyName;
    public $department;
    public $salary;

    public function __construct(string $companyName,string $department, int $salary)
    {
        $this->companyName = $companyName;
        $this->department = $department;
        $this->salary = $salary;
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

        case 'company': if(array_key_exists($name, $people)){

            $people[$name]->setCompany($input[2], $input[3], intval($input[4]));
        } else {

            $people[$name] = new Person();
            $people[$name]->setCompany($input[2], $input[3], intval($input[4]));
        }
            break;

        case 'car': if(array_key_exists($name, $people)){

            $people[$name]->setCar($input[2], intval($input[3]));
        } else {

            $people[$name] = new Person();
            $people[$name]->setCar($input[2], intval($input[3]));
        }
            break;

        case 'pokemon': if(array_key_exists($name, $people)){

            $people[$name]->addPokemon($input[2], $input[3]);
        } else {

            $people[$name] = new Person();
            $people[$name]->addPokemon($input[2], $input[3]);
        }
            break;

        case 'parents': if(array_key_exists($name, $people)){

            $people[$name]->addPokemon($input[2], $input[3]);
        } else {

            $people[$name] = new Person();
            $people[$name]->addPokemon($input[2], $input[3]);
        }
            break;
        case 'children': if(array_key_exists($name, $people)){

            $people[$name]->addChild($input[2], $input[3]);
        } else {

            $people[$name] = new Person();
            $people[$name]->addChild($input[2], $input[3]);
        }
            break;
    }


}


$targetPerson = trim(fgets(STDIN));
print_r($people);

