<?php
	
require_once('db.php');

function getAllContactCustomer(){
	$conn = getConnection();
	$sql = "select * from contactcustomer";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function insertContactCustomer($text){
	$conn = getConnection();
	$sql = "insert into contactcustomer values('$text')";

	if(mysqli_query($conn, $sql)){
		return true;
	}else{
		return false;
	}
}

function deleteContactCustomer($text){
    $conn = getConnection();
    $sql = "delete from contactcustomer where text= '$text' ";
        
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

?>