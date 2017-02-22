<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 2/22/2017
 * Time: 3:14 PM
 */

class Book {

    private $title;
    private $author;
    private $price;


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

    public function getPrice(){

        return $this->price;
    }



}



class GoldenEditionBook extends Book
{

    public function getPrice(){

        return parent::getPrice() * 1.3;
    }

}

$author = trim(fgets(STDIN));
$title = trim(fgets(STDIN));
$price = floatval(trim(fgets(STDIN)));
$type = trim(fgets(STDIN));

try {

if ($type == 'STANDARD'){

    $book = new Book($title, $author, $price);
} else if ($type == 'GOLD') {

    $book = new GoldenEditionBook($title, $author, $price);

} else throw new Exception('Type is not valid!');

echo 'OK' . PHP_EOL;
echo $book->getPrice();

} catch (Exception $e) {

    echo $e->getMessage();
}