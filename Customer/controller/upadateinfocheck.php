<?php
require_once('../model/Webtech.php');
require_once('../model/userModel.php');
$id         =           $_POST['abc'];
$FullName   =     $_POST['fName'];
$Email      = $_POST['Email'];
$Gender     = $_POST['gender'];
$date       = $_POST['date'];

$user = [
    'uid'               => $id,
    'name'              => $FullName,
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
