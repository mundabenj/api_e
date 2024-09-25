<?php
class auth{
    public function signup($conn, $ObjGlob){
        if(isset($_POST["signup"])){

            $errors = array();

            $fullname = $_POST["fullname"];
            $email_address = $_POST["email_address"];
            $username = $_POST["username"];

// Implement input validation and error handling
//=================================================


// verify the the fullname only contains letter, space, and an quotation sign

// verify that the email has the correct format

if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)){
    $errors['email_format_err'] = 'Wrong email format';
}

// verify that the email address domain is authorized (@strathmore.edu, gmail.com) not (@yanky.sco)
// verify that the new email address does not exist already in the database

// verify that the new username does not exist already in the database

// Implement 2FA (email == PHP-Mailer).
//=====================================

// verify that the password is identical to the repeat password

// verify that the password length is between 4 and 8 characters 

if(!count($errors)){
    $cols = ['fullname', 'email', 'username'];
    $vals = [$fullname, $email_address, $username];

    $data = array_combine($cols, $vals);

    $insert = $conn->insert('users', $data);
        if($insert === TRUE){
            header('Location: signup.php');
            exit();
        }else{
            die($insert);
        }
    }else{
        $ObjGlob->setMsg('msg', 'Error(s)', 'invalid-feedback');
        $ObjGlob->setMsg('errors', $errors, 'invalid-feedback');
    }
        }
    }
}