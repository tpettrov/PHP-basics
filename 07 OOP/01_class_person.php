<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/14/2017
 * Time: 20:10
 */
class Person
{

    private $name;
    public $age;

    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }


}

$person1 = new Person(23, 'Petar');
$person2 = new Person(24, 'Ivan');
$person3 = new Person(25, 'George');

echo(count(get_object_vars($person1)));
print_r($person1->age);