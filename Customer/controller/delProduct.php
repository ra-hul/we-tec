<?php 
	include('footer.php');
	if(isset($_POST['delete']))
	{
		$userValidationInfo = [
								 'user' => ".",
								 'cat' => ".",
								# 'rPass' => ".",
								 #'email' => ".",
		      				  ];

		$allData = json_encode($userValidationInfo);
		$userData = fopen("../model/userValidationInfo.json", "w");
		fwrite($userData, $allData);
		fclose($userData);
		header('location: 	../view/homee.php');
	}
?>