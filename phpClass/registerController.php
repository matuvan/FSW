<?php

class Register
{
    public $email;
    public $phone;    
    public $password;
    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $zipcode;
    public $accountType;
    
    // for store owners
    public $businessName;
    public $storeName;
    public $storeType;


    // array to place lines fed from text files later
    public $data;

    public $readEmail;
    public $readPhone;

    public function __construct()
    {
        // sanitize inputs for safety and consistency
        $this->email = @trim(htmlentities(strtolower($_POST['email'])));
        $this->phone = $_POST['phone'];
        $this->password = @password_hash($_POST['password'], PASSWORD_DEFAULT);
        $this->firstName = @ucwords($_POST['firstName']);
        $this->lastName = @ucwords($_POST['lastName']);
        $this->address = @ucwords($_POST['address']);
        $this->city = @ucwords($_POST['city']);
        $this->zipcode = $_POST['zipcode'];
        $this->accountType = @htmlentities($_POST['rad']);
        $this->businessName = @htmlentities($_POST['businessName']);
        $this->storeName = @htmlentities($_POST['storeName']);
        $this->storeType = $_POST['storeType'];
    }

    public function register()
    {
        if ($this -> isEmailAndPhoneAvailable()) {
            if ($this->accountType == 'storeOwner'){
                $data = array($this->email, $this->phone,$this->password, $this->firstName, $this->lastName,  $this->address,$this->accountType, $this->businessName, $this->storeName, $this->storeType);
                $loginInfo = implode('|',$data);
                file_put_contents("../stores.txt", $loginInfo.PHP_EOL, FILE_APPEND);
                echo '<b>Successfully registered!</b><br>';
                header("refresh:3; url=login.php");
                die;
            }
            else {
                $data = array($this->email, $this->phone,$this->password, $this->firstName, $this->lastName,  $this->address,$this->accountType);
                $loginInfo = implode('|',$data);
                file_put_contents("../users.txt", $loginInfo.PHP_EOL, FILE_APPEND);
                echo '<b>Successfully registered!</b><br>';
                header("refresh:3; url=login.php");
                die;
            }
        }
        else {
            echo '<b>That email/phone number is already taken!</b><br>';
            header("refresh:2; url=register.php");
            die;
        }      
    }

    public function isEmailAndPhoneAvailable(){
        if ($this->accountType == 'storeOwner'){
            if (file_exists("../stores.txt")){
                $d = file_get_contents("../stores.txt");
                $data = explode("\n", $d);
    
                foreach ($data as $row => $data) {
    
                    $row_user = explode('|', $data);
                    $this->readEmail = @trim($row_user[0]);
                    $this->readPhone = @trim($row_user[1]);
    
                    // check if user already exists
                    if (strcmp($this->readEmail, $this->email) === 0 || strcmp($this->readPhone, $this->phone) === 0) {
                        return false;
                        break;
                    }
                }
                return true;
            }
            else {
                $files = fopen("../stores.txt","x");
                fwrite($files,'');
                fclose($files);
                return true;
            }
        }
        else if (file_exists("../users.txt")){
            $d = file_get_contents("../users.txt");
            $data = explode("\n", $d);

            foreach ($data as $row => $data) {

                $row_user = explode('|', $data);
                $this->readEmail = @trim(strtolower($row_user[0]));
                $this->readPhone = @trim($row_user[1]);

                // check if user already exists
                if (strcmp($this->readEmail, $this->email) === 0 || strcmp($this->readPhone, $this->phone) === 0) {
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
            return true;
        }
    }
}