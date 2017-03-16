<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/16/2017
 * Time: 10:53 AM
 */

namespace DTO;


class genre
{

    private $id;
    private $name;

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
    public function getName()
    {
        return $this->name;
    }



}