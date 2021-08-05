<?php
	
	require_once('../Model/db.php');
	require_once('../Model/productModel.php');
	if($_POST['save'])
	{
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];

		if($name == '' || $username == '' || $email == '' $subject == '')
		{
			echo "Null Submission";
		}
		else
		{
			$contact = array('name' => $name, 'username' => $username, 'email' => $email, 'subject' => $subject);
			$connection = getConnection();
			$check = insertcontact($contact);
			if($check)
			{
				echo "Contact added successfully!!!";
				header('location: ../View/login.php');
			}
			else
			{
				echo "Error occured!";
			}

		}
	}
?>