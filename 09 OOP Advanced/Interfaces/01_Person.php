<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/25/2017
 * Time: 12:06
 */

interface Person {

    public function setName(string $name);

    public function setAge(int $age);

    public function __toString() : string ;

}

class Citizen implements  Person {

    private $age;
    private $name;

    public function __construct(int $age, string $name)
    {
        $this->setAge($age);
        $this->setName($name);

    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function __toString() : string
    {

        return $this->name . PHP_EOL . $this->age;
    }
}

$name =trim(fgets(STDIN));
$age = intval(trim(fgets(STDIN)));


$person = new Citizen($age, $name);
echo $person;
