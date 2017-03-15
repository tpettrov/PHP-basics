<?php

/* @var $data [] */

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
    </tr>
    </thead>

    <?php foreach ($data as $book) :?>
    <tr>
        <td><?= $book['id'] ?></td>
        <td><?= $book['title'] ?></td>
        <td><?= $book['genre'] ?></td>
        <td><?= $book['author'] ?></td>
        <td><?= $book['year_release'] ?></td>
        <td><?= $book['book_language'] ?></td>
        <td><?= $book['comment'] ?></td>
        <td><?= $book['image'] ?></td>
    </tr>
    <?php endforeach;?>


</table>






