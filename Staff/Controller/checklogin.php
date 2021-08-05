<?php

require_once('../model/dbConfig.php');
require_once('../model/userModel.php');


session_start();
if (isset($_POST['logusername']) && isset($_POST['logpassword'])) {
    $username = $_POST['logusername'];
    $password = $_POST['logpassword'];

    if (validateUser($username, $password)) {
        $_SESSION['flag'] = true;
        $_SESSION['username'] = $username;
        $r = getRole($username)['roll'];
        if (!$r) {
            echo "db error";
            print_r($r);
            return;
        }
        if ($r == 3) {
            header('location: ../View/dashboard.php');
        }
        if ($r == 1) {
            $_SESSION['flag1'] = true;
            header('location: ../../Owner/view/dashboard.php');
        }
        if ($r == 2) {
            $_SESSION['flag1'] = true;
            header('location: ../../Admin/view/home.html');
        }

        if ($r == 4) {
            header('location: ../../Customer/view/home.php');
        }
    } else {
        $_SESSION['flag'] = false;
        //header('location: login.php');

        echo "<h1>Invalid Credentials :( Please Try again.</h1>";
        echo "<br>";
        echo '<h1> <a href="../View/login.php">Try Again</a> </h1>';
        return false;
    }
}
