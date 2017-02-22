<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/21/2017
 * Time: 23:08
 */
class Food
{

    private $points;
    private $type;

    public function __construct(string $food)
    {

        $this->type = $food;

        switch ($food) {

            case 'cram':
                $this->points = 2;
                break;
            case 'lembas':
                $this->points = 3;
                break;
            case 'apple':
                $this->points = 1;
                break;
            case 'melon':
                $this->points = 1;
                break;
            case 'honeycake':
                $this->points = 5;
                break;
            case 'mushrooms':
                $this->points = -10;
                break;
            default:
                $this->points = -1;
        }


    }

    public function getPoints(){

        return $this->points;
    }


}

class Mood
{

    private $mood;

    public function __construct(int $points)
    {

        switch ($points) {

            case ($points < -5):
                $this->mood = 'Angry';
                break;
            case ($points >= -5 && $points < 0):
                $this->mood = 'Sad';
                break;
            case ($points >= 0 && $points <= 15):
                $this->mood = 'Happy';
                break;
            case ($points > 15):
                $this->mood = 'PHP';
                break;

        }

    }

    public function getMood(){

        return $this->mood;
    }



}


class FoodFactory
{

    public static function create($food)
    {

        return new Food($food);
    }
}

class MoodFactory
{
    public static function create($points)
    {

        return new Mood($points);
    }

}

class Mordor
{

    private $points;
    private $mood;

    public function __construct(array $foodArray)
    {

        $this->points = $this->digest($foodArray);
        $this->mood = MoodFactory::create($this->points);


    }

    private function digest($foodArray)
    {
        foreach ($foodArray as $food) {

            $this->points += $food->getPoints();
        }

        return $this->points;

    }

    public function __toString()
    {
        return $this->points . PHP_EOL . $this->mood->getMood();
    }
}

$input = explode(',', strtolower(trim(fgets(STDIN))));

$foodArray = [];

foreach ($input as $food) {

    $foodArray[] = FoodFactory::create($food);
}

//var_dump($foodArray);

$mordor = new Mordor($foodArray);

echo $mordor;