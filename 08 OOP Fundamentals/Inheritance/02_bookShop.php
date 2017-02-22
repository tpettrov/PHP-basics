<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/22/2017
 * Time: 3:14 PM
 */

class Book {

    protected $title;
    protected $author;
    protected $price;

    public function __construct(string $title, string $author, float $price)
{
    $this->setTitle($title);
    $this->setAuthor($author);
    $this->setPrice($price);


}


protected function setTitle($title) {

        if(strlen($title) < 3) {

            throw new Exception('Title not valid!');
        } else {

            $this->title = $title;
        }

}

    protected function setAuthor($author) {

        $authorNamesArray = explode(' ', $author);

        if (count($authorNamesArray) > 1) {

            if(is_numeric($authorNamesArray[1][0])) {

                throw new Exception('Author not valid!');
        }


        } else {

            $this->author = $author;
        }

    }

    protected function setPrice($price) {

        if($price <= 0) {

            throw new Exception('Price not valid!');
        } else {

            $this->price = $price;
        }

    }



}

$book = new Book('tr', 'Zadsa Ivanova', 4);

