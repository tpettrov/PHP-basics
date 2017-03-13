<?php
/**
 * Created by PhpStorm.
 * User: apetrov
 * Date: 3/13/2017
 * Time: 11:23 AM
 */

namespace DTO;


class Profile
{

    private $username;
    private $password;
    private $email;
    private $birthday;


    public function __construct($username, $password, $email, $birthday)
    {

        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->birthday = $birthday;

    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }





}