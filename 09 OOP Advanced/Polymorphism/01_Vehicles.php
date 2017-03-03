<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/27/2017
 * Time: 22:16
 */
interface MobileVehicle
{

    /**
     * @param float $distance
     * @return mixed
     */
    public function drive(float $distance);

    /**
     * @param float $quantity
     * @return mixed
     */
    public function refuel(float $quantity);


}


abstract class Vehicle implements MobileVehicle
{


    protected $fuelQuantity;
    protected $fuelConsumption;

    public function __construct(float $quantity, float $consumption)
    {
        $this->fuelQuantity = (float)$quantity;
        $this->fuelConsumption = (float)$consumption;

    }

    public function drive(float $distance)
    {
        if ((float)$distance * $this->fuelConsumption <= $this->fuelQuantity) {

            $this->fuelQuantity -= $distance * $this->fuelConsumption;
            return true;

        } else return false;
    }

    public function getFuel()
    {

        return $this->fuelQuantity;
    }


}

class Car extends Vehicle
{


    public function __construct(float $quantity, float $consumption)
    {
        parent::__construct($quantity, $consumption);
        $this->fuelConsumption = (float)$consumption + 0.9;
    }

    public function refuel(float $quantity)
    {
        $this->fuelQuantity += (float)$quantity;
    }
}

class Truck extends Vehicle
{


    public function __construct(float $quantity, float $consumption)
    {
        parent::__construct($quantity, $consumption);
        $this->fuelConsumption = (float)$consumption + 1.6;
    }

    public function refuel(float $quantity)
    {
        $this->fuelQuantity += 0.95 * (float)$quantity;
    }
}

$carTokens = explode(' ', trim(fgets(STDIN)));
$car = new Car($carTokens[1], $carTokens[2]);

$truckTokens = explode(' ', trim(fgets(STDIN)));
$truck = new Truck($truckTokens[1], $truckTokens[2]);


$commandsNum = trim(fgets(STDIN));

for ($i = 0; $i < $commandsNum; $i++) {

    $commandLine = explode(' ', trim(fgets(STDIN)));
    $vehicle = $commandLine[1];
    $action = $commandLine[0];
    $actionQuantity = (float)$commandLine[2];

    if ($vehicle == 'Car') {

        if ($action == 'Drive') {

            if ($car->$action($actionQuantity)) {

                echo "Car travelled $actionQuantity km" . PHP_EOL;
            } else
                echo "Car needs refueling" . PHP_EOL;

        } else {
            $car->$action($actionQuantity);
        }

    } else {


        if ($action == 'Drive') {

            if ($truck->$action($actionQuantity)) {

                echo "Truck travelled $actionQuantity km" . PHP_EOL;
            } else {

                echo "Truck needs refueling" . PHP_EOL;
            }
        } else {

            $truck->$action($actionQuantity);
        }


    }


}

$carfuel = number_format($car->getFuel(), 2);
$truckfuel = number_format($truck->getFuel(), 2);

echo "Car: {$carfuel}" . PHP_EOL;
echo "Truck: {$truckfuel}" . PHP_EOL;