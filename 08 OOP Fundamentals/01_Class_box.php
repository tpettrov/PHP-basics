<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/20/2017
 * Time: 20:34
 */
class Box
{

    private $length;
    private $width;
    private $height;

    public function __construct(float $length, float $width, float $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;

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

$box = new Box($length, $width, $height);

echo 'Surface Area - ' . $box->getSurfaceArea() . PHP_EOL;
echo 'Lateral Surface Area - ' . $box->getLateralSurfaceArea() . PHP_EOL;
echo 'Volume - ' . $box->getVolume();