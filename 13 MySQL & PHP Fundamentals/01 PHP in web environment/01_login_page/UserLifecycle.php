<?php

/**
 * Created by PhpStorm.
 * User: Toni
 * Date: 3/11/2017
 * Time: 22:57
 */
class UserLifecycle
{

    private $data = [];

    public  function __construct()
    {
        require_once ('database.php');
        $this->data = $users;

    }

    public function getEmail(string $username){

        return $this->data[$username]['email'];

    }

    public function getPassword(string $username){


        return $this->data[$username]['password'];

    }

    public function getBirthday(string $username){

        return $this->data[$username]['birthday'];

    }

	/**
 * @param string $username  The old username
 * @param array $data       The posted new data
 * @param array $userInfo   Referent information with user info e.g. session
 * @return bool             Whether the saving succeeded
 * @throws Exception
 */
public function edit(string $username, array $data, array &$userInfo) : bool {


    $newUser = $username;


        $this->data[$newUser] = [

            'password' => trim($data['password']),
            'email' => trim($data['email']),
            'birthday' => trim($data['birthday']),

        ];



    $userInfo['user'] = $newUser;
    $usersAsText = var_export($this->data, true);
    $declaration = '<?php ' . PHP_EOL . '$users = ' . $usersAsText . ';';
    $result = file_put_contents('database.php', $declaration);
    return $result !== false;

}


}