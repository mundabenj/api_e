<?php
class auth{
    public function signup($conn){
        if(isset($_POST["signup"])){
            $fullname = $conn->real_escape_string($_POST["fullname"]);
            $email_address = $_POST["email_address"];
            $username = $_POST["username"];

// Implement input validation and error handling
//=================================================
// verify that the email has the correct format
// verify that the email address domain is authorized (@strathmore.edu, gmail.com) not (@yanky.sco)
// verify that the new email address does not exist already in the database

// verify that the new username does not exist already in the database

// Implement 2FA (email == PHP-Mailer).
//=====================================

// verify that the password is identical to the repeat password

// verify that the password length is between 4 and 8 characters 

$cols = ['fullname', 'email', 'username', 'genderId', 'roleId'];
$vals = [$fullname, $email_address, $username, 1, 1];

$data = array_combine($cols, $vals);

$insert = $conn->insert('users', $data);
    if($insert === TRUE){
        header('Location: signup.php');
        exit();
    }else{
        die($insert);
    }
        }
    }
}