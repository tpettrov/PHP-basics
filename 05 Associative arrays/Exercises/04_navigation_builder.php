<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/10/2017
 * Time: 11:16 AM
 */

if (isset($_GET['categories']) || isset($_GET['tags']) || isset($_GET['months'])) {


    $categories = explode(', ', $_GET['categories']);
    $tags = explode(', ', $_GET['tags']);
    $months = explode(', ', $_GET['months']);

    $ready = true;
}

