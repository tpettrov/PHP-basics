<?php

/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/17/2017
 * Time: 11:10 AM
 */
class Person
{

    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {

        $this->name = $name;
        $this->age = $age;

    }

    public function getAge()
    {

        return $this->age;
    }

    public function __toString()
    {
        return $this->name . ' ' . $this->age;
    }

}

class Family
{

    private $people = [];

    public function addMember(Person $person)
    {

        $this->people[] = $person;
    }

    public function getOldestPerson()
    {

        $max = -1;
        foreach ($this->people as $person) {

            if ($person->getAge() > $max) {

                $max = $person->getAge();
                $oldestPerson = $person;
            }


        }

        return $oldestPerson;
    }

}

$n = trim(fgets(STDIN));

$family = new Family();

for ($i = 0; $i < $n; $i++) {

    $person = explode(' ', trim(fgets(STDIN)));

    $family->addMember(new Person($person[0], intval($person[1])));

}


echo $family->getOldestPerson();