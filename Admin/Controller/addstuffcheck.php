<?php
session_start();
require_once('../Model/usermodel.php');

if (isset( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
	$username =$_POST [ 'username' ];
	$email =$_POST [ 'email' ];
	$password =$_POST [ 'password' ];
	$confirm_password = $_POST [ 'confirm_password' ];

		if( $name == "" || $username == "" || $email == "" || $password == "" || $confirm_password == "")
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
			$stuff = array('name' => $name, 'username' => $username, 'email' => $email, 'password' => $password, 'displayable' => $displayable);
			$connection = getConnection();
			$check = insertstuff($stuff);
			if($check)
			{
				echo "Product added successfully!!!";
				header('location: ../view/stuff.html');
			}
			else
			{
				echo "Error occured!";
			}

		}
	}
?>