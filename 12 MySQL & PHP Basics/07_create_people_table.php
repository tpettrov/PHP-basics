<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/8/2017
 * Time: 19:26
 */

$db = new PDO('mysql:host=localhost;dbname=minions', 'root', '', ['utf8_general_ci']);

$stmt = $db->prepare("CREATE TABLE people (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  `name` TINYTEXT NOT NULL,
  `picture` BLOB NULL,
  `height` FLOAT NULL,
  `weight` FLOAT NULL,
  `gender` ENUM('m','f') NOT NULL,
  `birthdate` DATE NOT NULL,
  `biography` LONGTEXT NULL
  ) ");


    
    if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
}
