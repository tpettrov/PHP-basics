<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/17/2017
 * Time: 18:17
 */
class Car
{

    private $speed;
    private $fuel;
    private $fuelEconomy;
    private $distance;


    public function __construct(float $speed, float $fuel, float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;

    }

    public function travel(float $distance)
    {

        $fraction = $this->fuel/$this->fuelEconomy;
        $distancePossible = $fraction * 100;
        if($distancePossible >= $distance){
            $fuelUsed = ($distance / 100  ) * $this->fuelEconomy;
            $this->distance += $distance;
            $this->fuel -= $fuelUsed;
        } else {
            $this->distance += $distancePossible;
            $this->fuel = 0;
        }
    }

    public function refuel(float $liters)
    {

        $this->fuel += $liters;
    }

    public function getDistance()
    {

        $distance = number_format($this->distance, 1);

        echo "Total Distance: {$distance}" . PHP_EOL;


    }

    public function getTime()
    {
        $timeDecimal = $this->distance / $this->speed;
        $hours = (int)$timeDecimal;
        $minutes = round(($timeDecimal - $hours)  * 60);

        echo 'Total Time: ' . $hours . ' hours and ' . $minutes . ' minutes' . PHP_EOL;
    }

    public function getFuel()
    {
        $fuel = number_format($this->fuel, 1);

        echo "Fuel left: {$fuel} liters";
    }


}


list($speed, $fuel, $fuelEconomy) = explode(' ', trim(fgets(STDIN)));

$car = new Car(floatval($speed), floatval($fuel) , floatval($fuelEconomy));

while (true) {

    $command = explode(' ', trim(fgets(STDIN)));

    if ($command[0] == 'END') {
        break;
    }

    switch ($command[0]) {

        case 'Travel':
            $car->travel(floatval($command[1]));
            break;
        case 'Refuel':
            $car->refuel(floatval($command[1]));
            break;
        case 'Distance':
            $car->getDistance();
            break;
        case 'Time':
            $car->getTime();
            break;
        case 'Fuel':
            $car->getFuel();
            break;

    }

}





