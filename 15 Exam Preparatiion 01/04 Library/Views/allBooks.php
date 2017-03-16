<?php

/* @var $data \DTO\Book[] */


?>


Books table:

<table border="1">
    <thead>
    <tr>
        <td>Book ID</td>
        <td>Book Title</td>
        <td>Author</td>
        <td>Book Language</td>
        <td>Genre</td>
        <td>Year of Release</td>
        <td>Comments</td>
        <td>File</td>
    </tr>
    </thead>

    <?php foreach ($data as $book) :?>
    <tr>
        <td><?= $book->getId(); ?></td>
        <td><?= $book->getTitle(); ?></td>
        <td><?= $book->getBookAuthor(); ?></td>
        <td><?= $book->getBookLanguage(); ?></td>
        <td><?= $book->getGenre(); ?></td>
        <td><?= $book->getYear(); ?></td>
        <td><?= $book->getComments(); ?></td>
        <td><?= $book->getFile(); ?></td>
    </tr>
    <?php endforeach;?>


</table>






