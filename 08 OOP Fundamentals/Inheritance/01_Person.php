<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/22/2017
 * Time: 2:28 PM
 */

class Person {

    protected $name;
    protected $age;

    public function __construct(string $name, int $age)
    {

        $this->setName($name);
        $this->setAge($age);

    }

    protected function setAge(string $age){

        if ($age < 1) {

            throw new Exception('Age must be positive!');

        }

        $this->age = $age;

    }

    protected function setName(string $name){

        if (strlen($name) < 3) {

            throw new Exception('Name’s length should not be less than 3 symbols!');

        }

        $this->name = $name;

    }




}

class Child extends Person {

    protected function setAge(string $age){

        if ($age > 15) {

            throw new Exception('Child’s age must be less than 16!');

        }

        $this->age = $age;

    }

}

$child = new Person('Ana', 0);

var_dump($child);