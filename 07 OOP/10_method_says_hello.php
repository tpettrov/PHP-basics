<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/17/2017
 * Time: 10:27 AM
 */

$name = trim(fgets(STDIN));

class Person {

    public $name;

    public function sayHello ($name){

        return $name . ' says "Hello"!';

    }

}

$person = new Person();
echo $person->sayHello($name);