<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/9/2017
 * Time: 10:19 AM
 */

$db = new PDO('mysql:host=localhost;dbname=movies', 'root', '', ['utf8_general_ci']);


//$stmt = $db->prepare("CREATE TABLE `directors` (
// `id` INT NOT NULL AUTO_INCREMENT,
//  PRIMARY KEY (`id`),
// `director_name` VARCHAR(50) NOT NULL,
// `notes` MEDIUMTEXT
// )
//
//");

/*$stmt = $db->prepare("CREATE TABLE `genres` (
 `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
 `genre_name` VARCHAR(50) NOT NULL,
 `notes` MEDIUMTEXT
 )

");*/

$stmt = $db->prepare("CREATE TABLE `categories` (
 `id` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
 `category_name` VARCHAR(50) NOT NULL,
 `notes` MEDIUMTEXT
 )

");


if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
}