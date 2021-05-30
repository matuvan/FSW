<?php

class Register
{
    public $username;
    public $password;


    // initialize array to place lines fed from text files later
    public $data;

    public function __construct()
    {
        // sanitize inputs for safety and consistency
        $this->username = @htmlentities(strtolower($_POST['username']));
        $this->password = @htmlentities(strtolower($_POST['password']));
    }

    public function register()
    {
        if ($this -> checkAvailableUsername()) {
            $data = array($this->username, $this->password);
            $loginInfo = implode('|',$data);
            file_put_contents("../users.txt", $loginInfo.PHP_EOL, FILE_APPEND);
            echo '<b>Successfully registered!</b><br>';
            header("refresh:3; url=login.php");
            die;
        }
        else {
            echo '<b>That username is already taken!</b><br>';
            header("refresh:2; url=register.php");
            die;
        }
    }

    public function checkAvailableUsername(){
        if (file_exists("../users.txt")){
            $d = file_get_contents("../users.txt");
            $data = explode("\n", $d);

            foreach ($data as $row => $data) {

                $row_user = explode('|', $data);
                $this->readUsername = @(strtolower($row_user[0]));

                // check if user already exists
                if (strcmp($this->readUsername, $this->username) === 0) {
                    return false;
                    break;
                }
            }
            return true;
        }
        else{
            $files = fopen("../users.txt","x");
            fwrite($files,'');
            fclose($files);
            return false;
        }
    }
}