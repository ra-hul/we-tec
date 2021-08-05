<?php
	session_start();
	require_once('../Model/contactcustomermodel.php');
	$text=$_GET['text'];
	$status = deleteContactCustomer($text);				

	if($status){
		header('location: ../View/contactcustomer.php');
	}else{
		echo "error..try again";
	}
?>