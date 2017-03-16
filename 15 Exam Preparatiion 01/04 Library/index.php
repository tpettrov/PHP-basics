
<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/14/2017
 * Time: 22:27
 */

/** @var $app \Core\Application */

require_once ('app.php');

if (isset($_SESSION['user'])) {

    if ($userModel->isKnown($_SESSION['user'])) {

        // има някой, който го познаваме, покажи му формата за книги

        echo 'Welcome, ' . $_SESSION['user'] . '<br>';

        $genres = $bookModel->getGenres();

        $app->render('bookInput', $genres);


    }

} else {


    // покажи логина

    $app->render('login');

}