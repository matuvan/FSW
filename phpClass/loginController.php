<?php

class Login
{
    public $username;
    public $readEmail;
    public $readPhone;
    public $password;
    public $readPassword;

    // initialize array to place lines fed from text files later
    public $data;

    public function __construct()
    {
        // sanitize inputs for safety and consistency
        $this->username = @trim(htmlentities(strtolower($_POST['username'])));
        $this->password = @trim(htmlentities($_POST['password']));
    }

    // separate user verification function to authenticate normal users
    public function verifyUser()
    {
        if (file_exists("../users.txt")) {
            $d = file_get_contents("../users.txt");
            $data = explode("\n", $d);

            foreach ($data as $row => $data) {

                $row_user = explode('|', $data);
                $this->readEmail = @trim(strtolower($row_user[0]));
                $this->readPhone = @trim($row_user[1]);
                $this->readPassword = @trim($row_user[2]);

                // check for both username and password for a match in the "database"
                if ((strcmp($this->readEmail, $this->username) === 0 || strcmp($this->readPhone, $this->username) === 0) && password_verify($this->password, $this->readPassword)) {
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
                $row_user = explode('|', $data);

                $this->readUsername = @trim(strtolower($row_user[0]));
                $this->readPassword = @trim(strtolower($row_user[1]));


                if (strcmp($this->readUsername, $this->email) === 0 && password_verify($this->password, $readPassword)) {
                    return true;
                }
            }
            return false;
        }        
        return false;
    }

    public function logIn()
    {
        // first, see if it's an admin
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