<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/15/2017
 * Time: 11:36 AM
 */

require_once('app.php');

if(isset($_POST['addBook'])){

    $bookId = trim($_POST['bookId']);
    $bookTitle = trim($_POST['bookTitle']);
    $bookAuthor = trim($_POST['bookAuthor']);
    $bookLanguage = trim($_POST['bookLanguage']);
    $genre = trim($_POST['genre']);
    $year = trim($_POST['year']);
    $comments = trim($_POST['comment']);
    $file = trim($_POST['file']);

    if ($bookModel->add($bookId, $bookTitle, $bookAuthor, $bookLanguage, $genre, $year, $comments, $file)){

        // покажи всички книги

    } else {

        $app->render('bookInput');

    }




} else if (isset($_POST['showAll'])) {

        $data = $bookModel->getAllBooks();


    $app->render('allBooks', $data);


}