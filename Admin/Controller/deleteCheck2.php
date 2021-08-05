<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../Model/productModel.php');  
	if(isset($_POST['delete']))
	{
		$id = $_SESSION['id'];
		$connection = getConnection();
		$check = deleteProduct($id);
		if($check)
		{
			echo "Product deleted!";
			header('location: ../view/expense.php');
		}
		else
		{
			echo "Error occured!";
		}
	}
?>