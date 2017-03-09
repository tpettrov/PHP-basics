<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/9/2017
 * Time: 11:17 AM
 */


$db = new PDO('mysql:host=localhost;dbname=softuni', 'root', '');

$stmt = $db->prepare("ALTER TABLE towns AUTO_INCREMENT=1;
INSERT INTO `towns` 
(`name`) 
VALUES 
('Sofia'),('Plovdiv'),('Varna'),('Burgas')");


if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
}