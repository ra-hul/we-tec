<?php
session_start();
require_once('../Model/db.php');
require_once('../Model/usermodel.php');

if ( isset ( $_POST [ 'submit' ])) 
{
	$id = $_SESSION['id'];
	$name = $_POST [ 'name' ];
	$username = $_POST['username'];
	$email =$_POST [ 'email' ];
	$password = $_POST['password'];
	$displayable = 'No';

	if(isset($_POST['check']))
		{
			global $displayable;
			$displayable = "Yes";
		}
		$stuff = array('name' => $name, 'username' => $username, 'email' => $email,
			'password' => $password, 'displayable' => $displayable);
	$connection = getConnection();
	$check= updatestuff($id, $stuff);
		if($check)
		{
			echo "profile updated!";
			header('location:../View/viewstuff.php');
		}
		else
		{
			echo "Error ";
		}

		if(isset($_POST['check']))
		{
			session_start();
			$_SESSION['check'] = true;
		}
}

?>

