<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/8/2017
 * Time: 4:08 PM
 */

$db = new PDO('mysql:host=localhost;dbname=minions', 'root', '');


$stmt = $db->prepare("INSERT INTO `minions` (`id`, `name`, `age`, `town_id`) VALUES ('2', 'Bob', '15', '3'),('1','Kevin','22','1'),('3','Steward','','2');");


if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
}

