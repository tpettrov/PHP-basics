<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/8/2017
 * Time: 11:07 AM
 */

$db = new PDO('mysql:host=localhost;dbname=minions', 'root', '', ['utf8_general_ci']);

$stmt = $db->prepare("CREATE TABLE `minions` (
	`id` INT NOT NULL,
	`name` VARCHAR(50) NULL,
	`age` TINYINT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'");
$stmt->execute();

$stmt = $db->prepare('CREATE TABLE `towns` (
`id` INT NOT NULL,
	`name` VARCHAR(50) NULL,
	PRIMARY KEY(`id`)
)');

$stmt->execute();


