<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/25/2017
 * Time: 13:00
 */
interface Car
{

    public function useBreaks(): string;

    public function pushTheGas(): string;

    public function setDriver(string $driver);

}

class Ferrari implements Car
{

    private $driver;
    private $model = '488-Spider';

    public function __construct(string $driver)
    {
        $this->setDriver($driver);

    }

    public function setDriver(string $driver)
    {
        $this->driver = $driver;
    }

    public function __toString()
    {
        return $this->model . '/' . $this->useBreaks() . '/' . $this->pushTheGas() . '/' . $this->driver;
    }

    public function useBreaks(): string
    {
        return 'Brakes!';
    }

    public function pushTheGas(): string
    {
        return 'Zadu6avam sA!';
    }

}

$driver = fgets(STDIN);

$car = new Ferrari($driver);
echo $car;