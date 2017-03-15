<?php
/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/14/2017
 * Time: 23:14
 */

namespace UserModel;


class UserModel
{

    /**
     * @var \PDO
     */

    private $db = null;

    public function __construct(\PDO $db)
    {

        $this->db = $db;

    }

    public function login($username, $password): bool
    {

        $loginStmt = $this->db->prepare("
            
            SELECT 
                    username,
                    password
                    
             FROM users
             WHERE
             username = ?
        
        ");

        $loginStmt->execute([$username]);

        if ($loginStmt->rowCount() <= 0) {

            return false;

        }

        $result = $loginStmt->fetch(\PDO::FETCH_ASSOC);
        $dbPass = $result['password'];
        if ($password == $dbPass) {

            return true;
        } else {

            return false;
        }


    }

    public function isKnown($username): bool

    {

        $loginStmt = $this->db->prepare("
            
            SELECT 
                    username
                    
             FROM users
             WHERE
             username = ?
        
        ");

        $loginStmt->execute([$username]);

        if ($loginStmt->rowCount() <= 0) {

            return false;

        } else return true;

    }


}