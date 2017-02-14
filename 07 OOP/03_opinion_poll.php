<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/14/2017
 * Time: 21:09
 */



$n = trim(fgets(STDIN));

$arr = [];

for ($i = 0; $i < $n; $i++) {

    list($name, $age) = explode(' ', trim(fgets(STDIN)));

    array_push($arr, new Person($name, $age));
}

$arrOver30 = array_filter($arr, function ($a) {

    return $a->age > 30;

});

usort($arrOver30, function ($a,$b) {

   return $a->name > $b->name;
});

foreach ($arrOver30 as $person) {

    echo $person->name . " - " . $person->age . "\n";
}

class Person
{

    public $age;
    public $name;

    public function __construct(string $name, int $age)
    {

        $this->name = $name;
        $this->age = $age;

    }


}