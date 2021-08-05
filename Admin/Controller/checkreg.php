<?php
require_once('../model/dbConfig.php');
require_once('../model/userModel.php');
session_start();
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmpassword']) && isset($_POST['date'])  && isset($_POST['fav'])  && isset($_POST['gender']) && isset($_POST['role'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $fav = $_POST['fav'];
    $roll = intval($_POST['role']);




    function isAlphabetic($name)
    {
        $name = str_replace(' ', '', $name);

        for ($i = 0; $i < strlen($name); $i++) {
            if (!(($name[$i] >= 'a' && $name[$i] <= 'z') || ($name[$i] >= 'A' && $name[$i] <= 'Z'))) {
                return false;
            }
        }
        return true;
    }

    if (!isAlphabetic($name)) {
        echo 'Name and must be Alphabets only';
        return;
    }


    if (strlen(trim($name)) < 6) {
        echo "Fullname must be at least 5 characters";
        return;
    }

    function validateEmail($email)
    {
        $emailIsValid = FALSE;

        if (!empty($email)) {
            $domain = ltrim(stristr($email, '@'), '@') . '.';
            $user   = stristr($email, '@', TRUE);

            if (!empty($user) && !empty($domain) && checkdnsrr($domain)) {
                $emailIsValid = TRUE;
            }
        }

        return $emailIsValid;
    }

    if (!validateEmail($email)) {
        echo "Invalid Email";
    }




    if (strlen(trim($username)) < 4) {
        echo "Username must be at least 3 characters";
        return;
    }


    function isAlphanum($username)
    {
        $name = trim($username);

        for ($i = 0; $i < strlen($name); $i++) {
            if (!(($name[$i] >= 'a' && $name[$i] <= 'z') || ($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i] >= 0 && $name[$i] <= 9))) {
                return false;
            }
        }
        return true;
    }

    if (!isAlphanum($username)) {
        echo 'Username must be Alphanumeric';
        return;
    }

    if ($password != $confirmpassword) {
        echo 'Passwords do not match!';
        return;
    }

    if (strlen($password) < 8) {
        echo 'Password must be atleast 8 characters!';
        return;
    }

    function isSpecial($password)
    {
        for ($i = 0; $i < strlen($password); $i++) {
            if ($password[$i] === '@' || $password[$i] === '#' || $password[$i] === '$' || $password[$i] === '%') {
                return true;
            }
        }
        return false;
    }

    if (!isSpecial($password)) {
        echo 'Password must have a special character!';
        return;
    }



    $array1 = [];
    $array1 += ['username' => $username];
    $array1 += ['name' => $name];
    $array1 += ['password' => $password];
    $array1 += ['email' => $email];
    $array1 += ['gender' => $gender];
    $array1 += ['date' => $date];
    $array1 += ['fav' => $fav];
    $array1 += ['roll' => $roll];

    if (insertUser($array1)) {
        header('location: ../view/login.php');
    } else {
        echo "Registration Failed <br>";
        echo "<br>";
        return;
    }
} else {
    echo "Please Fill Everything";
}
