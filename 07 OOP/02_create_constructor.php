<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/14/2017
 * Time: 20:32
 */

$name = trim(fgets(STDIN));
$age = trim(fgets(STDIN));
$person = new Person($name, $age);

class Person
{

    public $age;
    public $name;

    public function __construct(string $name, int $age)
    {

        $this->name = $name;
        $this->age = $age;

        echo $this->name . ' ' . $this->age;


    }


}