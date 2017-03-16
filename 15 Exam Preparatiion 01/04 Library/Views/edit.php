<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/16/2017
 * Time: 3:32 PM
 */

/* @var $data2 \DTO\book */
/* @var $data \DTO\genre[] */

?>

<form method="post" action="bookControl.php">
    Book Id *
    <input type="text" name="bookId" value="<?= $data2->getId();?>"> <br>
Book Title *
    <input type="text" name="bookTitle" value="<?= $data2->getTitle();?>"> <br>
Author *
    <input type="text" name="bookAuthor" value="<?= $data2->getAuthor();?>"> <br>
Language *
    <input type="text" name="bookLanguage" value="<?= $data2->getBookLanguage();?>"> <br>

Genre *
    <select name="genre" >
        <?php foreach ($data as $genre) : ?>
    <option value='<?= $genre->getId();?>'> <?= $genre->getName();?></option>

<?php endforeach; ?>
</select>

Year of release *

<input type="date" name="year" value="<?= $data2->getYear();?>">

Comments *

<textarea name="comment"><?= $data2->getComment();?></textarea>

<input type="file" name="file">

<button type="submit" name="edit"> Edit Book </button>



</form>