<?php
require_once('../Model/userModel.php');
$id = $_GET['id'];
$status = deleteEmployee($id);
if ($status) {
    echo "Employee Terminate Successfully";
} else {
    echo "Db error";
}
