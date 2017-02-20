<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/20/2017
 * Time: 21:29
 */
class Box
{

    private $length;
    private $width;
    private $height;

    public function __construct(float $length, float $width, float $height)
    {
        self::paramValidator($length, 'length');
        self::paramValidator($width, 'width');
        self::paramValidator($height, 'height');

    }

    private function paramValidator(float $param, string $property)
    {

        if ($param <= 0) {

            $exception = ucfirst($property);
            throw new Exception("$exception cannot be zero or negative.");
        } else

            $this->$property = $param;

    }

    public function getSurfaceArea()
    {

        return number_format(2 * $this->length * $this->width + 2 * $this->length * $this->height + 2 * $this->width * $this->height, 2, '.', '');
    }

    public function getLateralSurfaceArea()
    {

        return number_format(2 * $this->length * $this->height + 2 * $this->width * $this->height, 2, '.', '');
    }

    public function getVolume()
    {

        return number_format($this->length * $this->height * $this->width, 2, '.', '');
    }

}

$length = (float)trim(fgets(STDIN));
$width = (float)trim(fgets(STDIN));
$height = (float)trim(fgets(STDIN));

try {

    $box = new Box($length, $width, $height);

    echo 'Surface Area - ' . $box->getSurfaceArea() . PHP_EOL;
    echo 'Lateral Surface Area - ' . $box->getLateralSurfaceArea() . PHP_EOL;
    echo 'Volume - ' . $box->getVolume();

} catch (Exception $e) {

    echo $e->getMessage();
}



