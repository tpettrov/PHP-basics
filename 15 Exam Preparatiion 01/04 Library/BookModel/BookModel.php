<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/15/2017
 * Time: 11:45 AM
 */

namespace BookModel;


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
                    genre,         
                    year_release,
                    comment,
                    image
                        )
                    
            VALUES
             (? , ? , ? , ? , ? , ? , ? , ?);
        
        ");

        $addStmt->execute([$bookId, $bookTitle, $bookAuthor, $bookLanguage, $genre, $year, $comments, $file]);

        //var_dump($addStmt->errorInfo());


    }

    public function getAllBooks()
    {

        $getStmt = $this->db->prepare("
            
            SELECT * FROM library.books;
                  
        
        ");

        $getStmt->execute();
        $result = $getStmt->fetchAll(\PDO::FETCH_ASSOC);

        return $result;

    }


}