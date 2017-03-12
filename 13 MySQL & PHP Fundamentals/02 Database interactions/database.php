<?php 

$db = new PDO("mysql:host=localhost;dbname=blog",'root','');

//var_dump($db->query("SELECT * FROM users")->fetchAll());