<?php

$jsonString = file_get_contents('../Model/users.json');
$data = json_decode($jsonString, true);

if (isset($_POST['oldpassword']) || isset($_POST['password']) || isset($_POST['confirmpassword'])) {
    $oldpassword = $_POST['oldpassword'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if ($data["password"] != $oldpassword) {
        echo 'Old password is wrong!';
        return;
    }

    if ($password != $confirmpassword) {
        echo 'New Passwords do not match!';
        return;
    }

    if (strlen($password) < 8) {
        echo 'Password must be atleast 8 characters!';
        return;
    }

    $data['password'] = $confirmpassword;
    $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('../Model/users.json', $newJsonString);
    echo "<h1>Password Changed Successfully</h1>";
    echo "<br>";
    echo '<h1> <a href="../View/logout.php">Login again!</a> </h1>';
};
