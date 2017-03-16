<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/15/2017
 * Time: 11:45 AM
 */

namespace Models;


class BookModel
{

    private $db = null;

    public function __construct(\PDO $db)
    {

        $this->db = $db;

    }


    public function add($bookId, $bookTitle, $bookAuthor, $bookLanguage, $genre, $year, $comments, $file){

        $addStmt = $this->db->prepare("
            
            INSERT INTO library.books 
                    (id,
                    title,
                    author,
                    book_language,
                    genre_id,         
                    year_release,
                    comment,
                    image
                        )
                    
            VALUES
             (? , ? , ? , ? , ? , ? , ? , ?);
        
        ");

        $addStmt->execute([$bookId, $bookTitle, $bookAuthor, $bookLanguage, $genre, $year, $comments, $file]);

       // var_dump($addStmt->errorInfo());


    }

    public function getAllBooks()
    {

        $getAllStmt = $this->db->prepare("
            
            SELECT * FROM library.books;
                  
        
        ");

        $getAllStmt->execute();



        while($book = $getAllStmt->fetchObject(\DTO\book::class)) {

            var_dump($book);
                yield $book;
        }


    }

    public function  getGenres() : \Generator
    {

        $getGenresStm = $this->db->prepare("
        
            SELECT * FROM library.genres;
        
        ");

        $getGenresStm->execute();

        while ($genre = $getGenresStm->fetchObject(\DTO\genre::class)) {

            yield $genre;

        }
    }


}