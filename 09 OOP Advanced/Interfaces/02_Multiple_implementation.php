<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/25/2017
 * Time: 12:33
 */
interface Identifiable
{

    public function setID(string $id);


}

interface Birthable
{

    public function setBirthday(string $birthdate);

}

class Citizen implements Identifiable, Birthable
{

    private $age;
    private $name;
    private $birthdate;
    private $id;

    public function __construct(int $age, string $name, string $birthdate, string $id)
    {
        $this->setAge($age);
        $this->setName($name);
        $this->setBirthday($birthdate);
        $this->setID($id);

    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setBirthday(string $birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function setID(string $id)
    {
        $this->id = $id;
    }

    public function __toString(): string
    {

        return $this->name . PHP_EOL . $this->age . PHP_EOL . $this->id . PHP_EOL . $this->birthdate;
    }
}

$name = trim(fgets(STDIN));
$age = intval(trim(fgets(STDIN)));
$id = trim(fgets(STDIN));
$birthdate = trim(fgets(STDIN));


$person = new Citizen($age, $name, $birthdate, $id);
echo $person;