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

    // separate user verification function to authenticate normal users
    public function verifyUser()
    {
        if file_exists("../users.txt") {
            $d = file_get_contents("../users.txt");
            $data = explode("\n", $d);

            foreach ($data as $row => $data) {

                $row_user = explode(',', $data);
                $this->readUsername = @(strtolower($row_user[0]));
                $this->readPassword = @trim(strtolower($row_user[1]), "\r");

                // check for both username and password for a match in the "database"
                if (strcmp($this->readUsername, $this->username) === 0 && strcmp($this->readPassword, $this->password) === 0) {
                    return true;
                }
            }
        }        
        return false;
    }
}