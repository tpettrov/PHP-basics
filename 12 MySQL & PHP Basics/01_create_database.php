<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/8/2017
 * Time: 10:35 AM
 */

$db = new PDO('mysql:host=localhost', 'root', '', ['utf8_general_ci']);
$stmt = $db->prepare('CREATE DATABASE `Minions`
  DEFAULT COLLATE utf8_general_ci');


$stmt->execute();

