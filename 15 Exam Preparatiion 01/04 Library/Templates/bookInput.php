<form method="post" action="../04 Library/bookControl.php">
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
        <option value="Comedy">Comedy</option>
        <option value="Drama">Drama</option>
        <option value="Crime">Crime</option>
    </select>

    Year of release *

    <input type="date" name="year">

    Comments *

    <textarea name="comment"></textarea>

    <input type="file" name="file">

    <input type="submit" name="addBook" value="Add Book">

    <input type="submit" name="showAll" value="Show all books">


</form>