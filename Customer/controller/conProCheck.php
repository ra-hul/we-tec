<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$userFile = fopen("../model/userValidationInfo.json", "r");
		$userData = fread($userFile, filesize('../model/userValidationInfo.json'));
		$userInfo = json_decode($userData, true);

		$username = $userInfo['user'];
		$category = $userInfo['cat'];

		if($username == "" || $category== ""){
			echo "null submission...";
		}else{

			if($username == $_POST['username'] && $password == $_POST['cat']){
				$_SESSION['flag'] = true;
				header('location: ../view/homee.php');
			}else{
				echo "Sir Please Write down properly name and product Category";
			}
		}

	}
?>