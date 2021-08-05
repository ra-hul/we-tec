<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../Model/stockmodel.php');  
	if(isset($_POST['submit']))
	{
		$id = $_SESSION['id'];
		$connection = getConnection();
		$check = deletestock($id);
		if($check)
		{
			echo "Product deleted!";
			header('location: ../View/vieworder.php');
		}
		else
		{
			echo "Error occured!";
		}
	}
?>