<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/9/2017
 * Time: 11:17 AM
 */


$db = new PDO('mysql:host=localhost;dbname=softuni', 'root', '');

//$stmt = $db->prepare("ALTER TABLE towns AUTO_INCREMENT=1;
//INSERT INTO `towns`
//(`name`)
//VALUES
//('Sofia'),('Plovdiv'),('Varna'),('Burgas')");

//$stmt = $db->prepare("ALTER TABLE departments AUTO_INCREMENT=1;
//INSERT INTO `departments`
//(`name`)
//VALUES
// ('Sales'), ('Marketing'), ('Software Development'), ('Quality Assurance')");

//$stmt = $db->prepare("ALTER TABLE employees AUTO_INCREMENT=1;
//INSERT INTO `employees`
//(first_name, middle_name, last_name, job_title, department_id, hire_date, salary)
//VALUES
// ('Ivan', 'Ivanov', 'Ivanov', '.NET Developer', '4', '2013-01-02', '3500.00'),
// ('Petar ', 'Petrov', 'Petrov', 'Senior Engineer', '1', '2004-02-03', '4000.00'),
// ('Maria ', 'Petrova', 'Ivanova', 'Intern', '5', '2004-02-03', '525.25'),
// ('Georgi ', 'Terziev', 'Ivanov', 'CEO', '2', '2007-12-09', '3000.00'),
// ('Peter ', 'Pan', 'Pan', 'Intern', '3', '2007-12-09', '599.88')");

$stmt = $db->prepare('SELECT * from `employees`');



if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
} else {

    var_dump($stmt->fetchAll($db::FETCH_ASSOC));
}