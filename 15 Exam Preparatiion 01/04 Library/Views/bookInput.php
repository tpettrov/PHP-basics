<?php

/* @var $data \DTO\genre[] */

?>

<form method="post" action="bookControl.php">
    Book Id *
    <input type="text" name="bookId"> <br>
    Book Title *
    <input type="text" name="bookTitle"> <br>
    Author *
    <input type="text" name="bookAuthor"> <br>
    Language *
    <input type="text" name="bookLanguage"> <br>

    Genre *
    <select name="genre">
        <?php foreach ($data as $genre) : ?>
            <option value='<?= $genre->getId();?>'> <?= $genre->getName();?></option>

        <?php endforeach; ?>
    </select>

    Year of release *

    <input type="date" name="year">

    Comments *

    <textarea name="comment"></textarea>

    <input type="file" name="file">

    <input type="submit" name="addBook" value="Add Book">

    <input type="submit" name="showAll" value="Show all books">


</form>