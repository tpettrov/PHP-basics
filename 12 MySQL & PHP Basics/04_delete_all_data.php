<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/8/2017
 * Time: 18:56
 */

$db = new PDO('mysql:host=localhost;dbname=minions', 'root', '');

$stmt = $db->prepare("TRUNCATE `minions`");


if (!$stmt->execute()) {
    print_r($stmt->errorInfo());
}