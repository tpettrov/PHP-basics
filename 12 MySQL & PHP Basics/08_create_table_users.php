<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/8/2017
 * Time: 23:12
 */

$db = new PDO('mysql:host=localhost;dbname=minions', 'root', '', ['utf8_general_ci']);

$stmt = $db->prepare("CREATE TABLE users (
  `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  `username` TINYTEXT NOT NULL,
  `password` CHAR NOT NULL,
  `profile_picture` BLOB NULL,
  `last_login_time` DATETIME,
  `is_deleted` ENUM('true','false') NOT NULL
  ) ");



if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
}