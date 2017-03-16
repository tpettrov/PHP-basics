<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/15/2017
 * Time: 4:14 PM
 */

namespace DTO;


class book
{

    private $id;
    private $title;
    private $author;
    private $bookLanguage;
    private $genre;
    private $year;
    private $comment;
    private $file;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getBookLanguage()
    {
        return $this->bookLanguage;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }






}