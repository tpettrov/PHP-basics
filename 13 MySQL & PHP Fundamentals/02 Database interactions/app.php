<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/12/2017
 * Time: 17:00
 */

spl_autoload_register(
    function ($class) {

        $class = str_replace("\\", "/", $class);
        require_once $class . '.php';

    });

\Driver\Database::setInstance(
    \Config\DbConfig::DB_HOST,
    \Config\DbConfig::DB_USER,
    \Config\DbConfig::DB_PASS,
    \Config\DbConfig::DB_NAME
);

$userLifeCycle = new UserLifecycle(\Driver\Database::getInstance(
    \Config\DbConfig::DB_HOST,
    \Config\DbConfig::DB_USER,
    \Config\DbConfig::DB_PASS,
    \Config\DbConfig::DB_NAME
));
