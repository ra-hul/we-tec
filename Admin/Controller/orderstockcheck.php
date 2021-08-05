<?php
	require_once('../Model/db.php');
	require_once('../model/stockmodel.php');
	if($_POST['submit'])
	{
		$name = $_POST['name'];
		$amount = $_POST['quantity'];
		$email = $_POST['email'];
		$payment = $_POST['payment'];

		if($name == '' || $amount == '' || $email == '' || $payment == '')
		{
			echo "Null Submission";
		}
		else
		{
			$displayable = "No";
			if(isset($_POST['check']))
			{
				global $displayable;
				$displayable = "Yes";
			}	
			$stock = array('name' => $name, 'email' => $email, 'amount' => $amount, 'payment' => $payment, 'displayable' => $displayable);
			$connection = getConnection();
			$check = insertstock($stock);
			if($check)
			{
				echo "Product added successfully!!!";
				header('location: ../View/vieworder.php');
			}
			else
			{
				echo "Error occured!";
			}

		}
	}
?>