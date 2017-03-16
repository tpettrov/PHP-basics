<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/15/2017
 * Time: 11:36 AM
 */

require_once('app.php');

if (isset($_POST['addBook'])) {

    $bookId = $_POST['bookId'];
    $bookTitle = $_POST['bookTitle'];
    $bookAuthor = $_POST['bookAuthor'];
    $bookLanguage = $_POST['bookLanguage'];
    $genre = $_POST['genre'];
    $year = $_POST['year'];
    $comments = $_POST['comment'];
    $file = $_POST['file'];

    if ($bookModel->add($bookId, $bookTitle, $bookAuthor, $bookLanguage, $genre, $year, $comments, $file)) {

        // покажи всички книги

    } else {

        $genres = $bookModel->getGenres();
        $app->render('bookInput', $genres);

    }


} else if (isset($_POST['showAll'])) {

    $data = $bookModel->getAllBooks();

    $app->render('allBooks', $data);


} else if (isset($_POST['delete'])) {

    $bookModel->deleteBook($_POST['delete']);

} else if (isset($_POST['update'])) {

    $genres = $bookModel->getGenres();
    $updateData = $bookModel->getUpdateData($_POST['update']);

    $app->render('edit', $genres, $updateData);

    //$bookModel->updateBook($_POST['update']);
}