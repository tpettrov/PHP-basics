<?php

/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/15/2017
 * Time: 1:08 PM
 */
class Car
{

    public $model;
    public $engine;
    public $weight; // optional
    public $color; // optional

    public function __construct(string $model, Engine $engine, string $weight = null, string $color = null)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;

    }

}

class Engine
{

    public $model;
    public $power;
    public $displacement; // optional
    public $efficiency; // optional

    public function __construct(string $model, string $power, int $displacement = null, string $efficiency = null)
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;

    }

}

$enginesCount = trim(fgets(STDIN));
$enginesArr = [];

for($i=0; $i < $enginesCount; $i++) {

    $engineSpec = explode(' ', trim(fgets(STDIN)));

    $engineModel = $engineSpec[0];
    $enginePower = $engineSpec[1];

    // optional elements logic


    $engineDisplacement = null;
    $engineEfficiency = null;

    if (isset($engineSpec[2])) {

        if (is_numeric($engineSpec[2])) {

            $engineDisplacement = $engineSpec[2];

        } else {

            $engineEfficiency = $engineSpec[2];
        }
    }

    if (isset($engineSpec[3])) {

        $engineEfficiency = $engineSpec[3];
    }


    array_push($enginesArr, new Engine($engineModel, $enginePower, $engineDisplacement, $engineEfficiency) );

}

//var_dump($enginesArr);

$carsCount = trim(fgets(STDIN));
$carsArr = [];


for ($i=0; $i < $carsCount; $i ++) {

    $carsSpec = explode(' ', trim(fgets(STDIN)));

    $carModel = $carsSpec[0];
    $carEngineString = $carsSpec[1];

    //optional

    $carWeight = null;
    $carColor = null;

    if (isset($carsSpec[2])) {

        if (is_numeric($carsSpec[2])) {

            $carWeight = $carsSpec[2];

        } else {

            $carColor = $carsSpec[2];
        }
    }

    if (isset($carsSpec[3])) {

        $carColor = $engineSpec[3];
    }



    array_push($carsArr, new Car($carModel, getEngine($carEngineString, $enginesArr), $carWeight, $carColor));


}

var_dump($carsArr);

function getEngine ($engineString, $arrayEngines){


    foreach ($arrayEngines as $engine) {

        if ($engine->model == $engineString) {

            return $engine;
        }

    }


}



