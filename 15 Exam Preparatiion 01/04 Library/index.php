<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/14/2017
 * Time: 22:27
 */

require_once ('app.php');

if (isset($_SESSION['user'])) {

    //покажи формата за въвеждане на книга


} else {


    // покажи логина

    ViewEngine\Template::render('login');

}