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
    private $bookAuthor;
    private $bookLanguage;
    private $genre;
    private $year;
    private $comments;
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
    public function getBookAuthor()
    {
        return $this->bookAuthor;
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
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }




}