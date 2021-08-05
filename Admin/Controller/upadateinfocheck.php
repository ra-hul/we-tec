<?php
require_once('../model/db.php');
require_once('../model/userModel.php');
$id =           $_POST['abc'];
$FullName =
    $_POST['name'];;
$UserName   = $_POST['Username'];
$Email = $_POST['email'];
$Gender = $_POST['Gender'];
$date = $_POST['date'];

$user = [
    'uid'               => $id,
    'name'              => $FullName,
    'username'    => $UserName,
    'email'        => $Email,
    'gender'    => $Gender,
    'date'   => $date
];
$status = updateusers($user);
if ($status) {
    echo "Update Successfully";
} else {
    echo "Update unsuccessful";
}
