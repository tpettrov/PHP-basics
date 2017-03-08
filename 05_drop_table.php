<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/8/2017
 * Time: 19:03
 */

$db = new PDO('mysql:host=localhost;dbname=minions', 'root', '');

$stmt = $db->prepare("DROP TABLE `towns`");


if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
}