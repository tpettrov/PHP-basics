<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 22:57
 */
class UserLifecycle
{
    /**
     * @var \PDO
     */

    private $db;

    public  function __construct()
    {
        require_once ('database.php');
        $this->db = $db;

    }

    private function exists(string $username) : bool
    {
            $userExistStatement = $this->db->prepare("
            
                SELECT id from users where username = ?
            
            ");

            $userExistStatement->execute([$username]);

            return $userExistStatement->rowCount() > 0;


    }

    public function register(string $username, string $fullname, string $password, string $birthday, string $email) : bool
    {

        if ($this->exists($username)) {

            throw new Exception('User already registered.');
        }


        $userRegStmt = $this->db->prepare("
        
                INSERT INTO users 
                (username, full_name, password, born_on, email)
                VALUES
                (?, ?, ?, ?, ?)
        
        ");

        $userRegStmt->execute([

            $username,
            $fullname,
            password_hash($password, PASSWORD_BCRYPT),
            $birthday,
            $email

        ]);

        return $userRegStmt->rowCount() > 0;

    }

    public function login(string $username, string $password) : bool
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

        if ($loginStmt->rowCount() <= 0 ) {

            return false;

        }

        $result = $loginStmt->fetch(PDO::FETCH_ASSOC);
        $hashedPass = $result['password'];
        if (password_verify($password, $hashedPass)) {

            return true;
        } else {

            return false;
        }


    }

    public function getEmail(string $username){

        $statement = $this->db->prepare("SELECT email FROM users where username = ?");

        $statement->execute(
        [
          $username
        ]
        );

        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['email'];

    }

    public function getPassword(string $username){


        $statement = $this->db->prepare("SELECT password FROM users where username = ?");

        $statement->execute(
            [
                $username
            ]
        );

        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['password'];

    }

    public function getBirthday(string $username){

        $statement = $this->db->prepare("SELECT born_on FROM users where username = ?");

        $statement->execute(
            [
                $username
            ]
        );

        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['born_on'];

    }

	/**
 * @param string $username  The old username
 * @param array $data       The posted new data
 * @param array $userInfo   Referent information with user info e.g. session
 * @return bool             Whether the saving succeeded
 * @throws Exception
 */
public function edit(string $username, array $postData, array &$userInfo) : bool {

    if ($username != $postData['username']) {

        $userExistStatement = $this->db->prepare(
          "SELECT id FROM users where username = ?"
        );

        $userExistStatement->execute([$postData['username']]);

        if ($userExistStatement->rowCount() > 0) {

            throw new Exception('Username already taken');

        }

    }

        $editStmt = $this->db->prepare(
            "UPDATE users SET username = ?, email = ?, born_on = ?
            WHERE
            username = ?"
        );

        $editStmt->execute([$postData['username'],
            $postData['email'],
            $postData['birthday'],
            $username
        ]);

        $userInfo['user'] = $postData['username'];
        return $editStmt->rowCount() > 0;
    }




}