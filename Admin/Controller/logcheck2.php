<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$userFile = fopen("../Model/userValidationInfo.json", "r");
		$userData = fread($userFile, filesize('../Model/userValidationInfo.json'));
		$userInfo = json_decode($userData, true);

		$username = $userInfo['user'];
		$password = $userInfo['pass'];

		if($username == "" || $password == ""){
			echo "null submission...";
		}else{

			if($username == $_POST['username'] && $password == $_POST['password']){
				$_SESSION['flag'] = true;
				header('location: ../view/home2.php');
			}else{
				echo "invalid user";
			}
		}

	}
?>