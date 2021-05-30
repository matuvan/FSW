<?php

class Login
{
    public $username;
    public $readUsername;
    public $password;
    public $readPassword;

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
        if (file_exists("../users.txt")) {
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

    // separate user verification function to authenticate admins
    public function verifyAdmin()
    {
        if (file_exists("../admin.txt")){
            $d = file_get_contents("../admin.txt");
            $data = explode("\n", $d);

            foreach ($data as $row => $data) {
                $row_user = explode(',', $data);

                $this->readUsername = @(strtolower($row_user[0]));
                $this->readPassword = @trim(strtolower($row_user[1]), "\r");

                if (strcmp($this->readUsername, $this->username) === 0 && strcmp($this->readPassword, $this->password) === 0) {
                    return true;
                }
            }
            return false;
        }        
        return false;
    }

    public function logIn()
    {
        // first check to see if it's an admin
        if ($this->verifyAdmin()) {
            $_SESSION['username'] = $this->username;
            $_SESSION['password'] = $this->password;
            $_SESSION['isAdmin'] = true;

            header("Location: dashboard.php");
            die();
        }

        // otherwise, must be an user
        elseif ($this->verifyUser()) {
            $_SESSION['username'] = $this->username;
            $_SESSION['password'] = $this->password;
            $_SESSION['isUser'] = true;

            header("Location: logged-in.php");
            die();
            // neither, failed authentication
        } 
        else {
            echo '<b>Invalid username Or password!</b><br>';
            echo '<b>Redirecting back to login after 3 seconds...</b>';
            header("refresh:3; url=login.php");
            die;
        }
    }

    public function logOut()
    {
        session_start();
        session_unset();
        header("Location: login.php");
        die();
    }
}

?>