<?php
	
	session_start();

	if(isset($_POST['Submit']))
	{
		$allOk = true;

		if($_POST["Name"] === "")
		{
			echo "Name field is empty! \r\n";
			$allOk = false;
		}
		elseif($_POST['Email'] === "")
		{
			echo "Email field is empty! \r\n";
			$allOk = false;
		}
		elseif($_POST['UserName'] === "")
		{
			echo "UserName field is empty! \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST['UserName'])<2)
		{
			echo "User Name must contain at least two (2) characters \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST['Password'])<8)
		{
			echo "Password must not be less than eight (8) characters \r\n";
			$allOk = false;
		}
		elseif($_POST['Password'] !== $_POST['cPassword'])
		{
			echo "Password and Confirm Password do not match! \r\n";
			$allOk = false;
		}
		else
		{

			$check = false;
			for ($i=0; $i < strlen($_POST['Password']); $i++) { 
				if($_POST['Password'][$i] === '@' || $_POST['Password'][$i] === '#' || $_POST['Password'][$i] === '$' || $_POST['Password'][$i] === '%')
				{
					$check = true;
					break;
				}
			}

			if($check === false)
			{
				echo "Please insert (@ or # or $ or %) special charecter in Password field \r\n";
				$allOk = false;
			}
		}

		if($allOk === true)
		{
			$_SESSION['userName'] = $_POST['UserName'];
			$_SESSION['password'] = $_POST['Password'];
			$_SESSION['email'] = $_POST['Email'];
			$_SESSION['name'] = $_POST['Name'];
			$_SESSION['gender'] = $_POST['gender'];
			$_SESSION['date'] = $_POST['date'];
			$_SESSION['month'] = $_POST['month'];
			$_SESSION['year'] = $_POST['year'];
			$_SESSION['flag1'] = true;
			header('location: ../view/login.php');
		}
	} 
?>