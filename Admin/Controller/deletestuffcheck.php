<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../model/usermodel.php');  
	if(isset($_POST['delete']))
	{
		$id = $_SESSION['id'];
		$connection = getConnection();
		$check = deletestuff($id);
		if($check)
		{
			echo "Product deleted!";
			header('location: ../View/viewstuff.php');
		}
		else
		{
			echo "Error occured!";
		}
	}
?>