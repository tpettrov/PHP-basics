<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/26/2017
 * Time: 00:43
 */
interface Birthtable
{

    public function hasBirthday(string $year);

    public function getBirthday(): string;

}

abstract class BirthdayCandidates
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


    /**
     * @param string $date
     * @return bool
     */
    public function hasBirthday(string $date)
    {

        if (strpos($this->getBirthday(), $date)) {

            return true;

        }
    }

    public function getId()
    {

        return $this->id;
    }


}


class Robot extends BirthdayCandidates implements Birthtable
{

    private $model;

    public function __construct(string $model, string $id)
    {
        parent::__construct($id);

        $this->model = $model;
    }


    public function getBirthday(): string
    {
        return;
    }
}

class Citizen extends BirthdayCandidates implements Birthtable
{

    private $name;
    private $age;
    private $birthday;

    public function __construct(string $name, string $age, string $id, string $birthday)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->age = $age;
        $this->birthday = $birthday;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }
}

class Pet extends BirthdayCandidates implements Birthtable
{

    private $birthday;
    private $name;

    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;

    }


    public function getBirthday(): string
    {
        return $this->birthday;
    }
}


$birthdayDates = [];
$birthdayCandidates = [];

$input = trim(fgets(STDIN));

while ($input != 'End') {

    $tokens = explode(' ', $input);

    if ($tokens[0] == 'Citizen') {

        $birthdayCandidates[] = new Citizen($tokens[1], $tokens[2], $tokens[3], $tokens[4]);
    } else if ($tokens[0] == 'Pet') {

        $birthdayCandidates[] = new Pet($tokens[1], $tokens[2]);
    }

    $input = trim(fgets(STDIN));

}

$date = trim(fgets(STDIN));

foreach ($birthdayCandidates as $birthdayCandidate) {

    if ($birthdayCandidate->hasBirthday($date)) {

        array_push($birthdayDates, $birthdayCandidate->getBirthday());
    }

}

if (count($birthdayDates) == 0) {

    echo '<no output>';
} else

    echo implode(PHP_EOL, $birthdayDates);