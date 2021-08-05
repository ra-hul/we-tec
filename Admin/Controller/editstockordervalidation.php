<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../Model/stockmodel.php'); 
	if(isset($_POST['submit']))
	{
		$id = $_SESSION['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$amount = $_POST['amount'];
		$payment = $_POST['payment'];
		$displayable = "No";
		if(isset($_POST['check']))
		{
			global $displayable;
			$displayable = "Yes";
		}
		$stock = array('name' => $name, 'email' => $email, 'amount' => $amount, 'payment' => $payment, 'displayable' => $displayable);
		$connection = getConnection();
		$check = updatestock($id, $stock);
		if($check)
		{
			echo "Product updated!";
			header('location: ../View/vieworder.php');
		}
		else
		{
			echo "Error occured!";
		}
		if(isset($_POST['check']))
		{
			session_start();
			$_SESSION['check'] = true;
		}
	}
?>