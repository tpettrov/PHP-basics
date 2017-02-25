<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/25/2017
 * Time: 20:37
 */
interface IdDetain
{

    public function isFakeId(string $key);

}

abstract class Immigrant
{

    private $id;

    /**
     * Immigrant constructor.
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }


    public function isFakeId(string $key)
    {
        $keySize = strlen($key);
        $endingId = substr($this->id, strlen($this->id) - $keySize);

        if ($endingId == $key) {

            return true;

        }
    }

    public function getId()
    {

        return $this->id;
    }


}


class Robot extends Immigrant implements IdDetain
{

    private $model;

    public function __construct(string $model, string $id)
    {
        parent::__construct($id);

        $this->model = $model;
    }


}

class Citizen extends Immigrant implements IdDetain
{

    private $name;
    private $age;


    public function __construct(string $name, string $age, string $id)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->age = $age;
    }

}


$detained = [];
$immigrants = [];

$input = trim(fgets(STDIN));

while ($input != 'End') {

    $tokens = explode(' ', $input);

    if (count($tokens) == 3) {

        $immigrants[] = new Citizen($tokens[0], $tokens[1], $tokens[2]);
    } else {

        $immigrants[] = new Robot($tokens[0], $tokens[1]);
    }

    $input = trim(fgets(STDIN));

}

$key = trim(fgets(STDIN));

foreach ($immigrants as $immigrant) {

    if ($immigrant->isFakeId($key)) {

        array_push($detained, $immigrant->getId());
    }

}

echo implode(PHP_EOL, $detained);


