<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/9/2017
 * Time: 11:01 AM
 */


$db = new PDO('mysql:host=localhost;dbname=car_rental', 'root', '', ['utf8_general_ci']);

$stmt = $db->prepare("CREATE TABLE categories (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  `category` TINYTEXT NOT NULL,
  `daily_rate` FLOAT NOT NULL,
  `weekly_rate` FLOAT NULL,
  `monthly_rate` FLOAT NULL ,
  `weekend_rate` FLOAT NULL
  ) ");



if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
}