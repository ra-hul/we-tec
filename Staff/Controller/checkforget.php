<?php

$jsonString = file_get_contents('../Model/users.json');
$data = json_decode($jsonString, true);

if (isset($_POST['ans'])) {
    $ans = $_POST['ans'];


    if ($data["fav"] === $ans) {
        echo 'Your Password: ' . $data["password"];
        echo "<br>";
        echo '<h1> <a href="../View/logout.php">Login again!</a> </h1>';
        return;
    } else {
        echo "Wrong Answer.Security Question Verification Failed.";
    }
};
