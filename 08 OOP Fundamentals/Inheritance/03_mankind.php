<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 2/22/2017
 * Time: 20:24
 */

class Human {

    protected $name;
    protected $lastName;

    public function __construct(string $name, string $lastName)
    {
        $this->setName($name);
        $this->setLastName($lastName);

    }

    private function setName(string $name){

        if (ctype_upper($name[0])) {

            if (strlen($name) >=4 ) {
                $this->name = $name;
            } else {

                throw new Exception('Expected length at least 4 symbols!Argument: firstName');
            }

        } else {

            throw new Exception('Expected upper case letter!Argument: firstName');
        }

    }

    protected  function  setLastName(string $lastName){

        if (ctype_upper($lastName[0])) {

            if (strlen($lastName) >=3 ) {
                $this->lastName = $lastName;
            } else {

                throw new Exception('Expected length at least 3 symbols!Argument: lastName ');
            }

        } else {

            throw new Exception('Expected upper case letter!Argument: lastName ');
        }


    }


}

class Worker extends  Human {

    private $weekSalary;
    private $workHoursPerDay;
    private $moneyPerHour;

    public function __construct($name, $lastName, float $weekSalary, float $workHours)
    {
        parent::__construct($name, $lastName);
        $this->setSalary($weekSalary);
        $this->setWorkHours($workHours);
        $this->calcSalaryPerHour();
    }

    protected  function  setLastName(string $lastName){

        if (ctype_upper($lastName[0])) {

            if (strlen($lastName) > 3 ) {
                $this->lastName = $lastName;
            } else {

                throw new Exception('Expected length more than 3 symbols!Argument: lastName');
            }

        } else {

            throw new Exception('Expected upper case letter!Argument: lastName ');
        }


    }

    private function setSalary(float $salary) {

        if ($salary > 10) {

            $this->weekSalary = $salary;
        } else {

            throw new Exception('Expected value mismatch!Argument: weekSalary');
        }

    }

    private function setWorkHours(float $workHours) {

        if ($workHours >= 1 && $workHours <= 12) {

            $this->workHoursPerDay = $workHours;
        } else {

            throw new Exception('Expected value mismatch!Argument: workHoursPerDay');
        }

    }

    public function calcSalaryPerHour(){

        $this->moneyPerHour = $this->weekSalary / ($this->workHoursPerDay * 7);
    }

    public function __toString()
    {
        return "First Name: " . $this->name . PHP_EOL . "Last Name: " . $this->lastName . PHP_EOL .
            "Week Salary: " . $this->format($this->weekSalary). PHP_EOL . "Hours per day: " . $this->format($this->workHoursPerDay) . PHP_EOL .
            "Salary per hour: " . $this->format($this->moneyPerHour);
    }

    private function format($num){

        return number_format($num, 2, '.', '');
    }


}

class Student extends  Human {

    private $facultyNum;

    public function __construct($name, $lastName, string $facultyNum)
    {
        parent::__construct($name, $lastName);
        $this->setFacultyNum($facultyNum);
    }

    private function setFacultyNum($facultyNum){

        if (strlen($facultyNum) >= 5 && strlen($facultyNum) <= 10) {

            $this->facultyNum = $facultyNum;
        } else {
            throw new Exception('Invalid faculty number!');
        }

    }

    public function __toString()
    {
        return "First Name: " . $this->name . PHP_EOL . "Last Name: " . $this->lastName . PHP_EOL .
            "Faculty number: " . $this->facultyNum . PHP_EOL;
    }


}

try {

    list($firstName, $lastName, $facultyNum) = explode(' ', trim(fgets(STDIN)));
    $student = new Student($firstName, $lastName, $facultyNum);

    list($firstName, $lastName, $weekSalary, $workHours) = explode(' ', trim(fgets(STDIN)));
    $worker = new Worker($firstName, $lastName, $weekSalary, $workHours);

    echo $student;
    echo PHP_EOL;
    echo $worker;


} catch (Exception $e) {

    echo $e->getMessage();
}
