<?php

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$category = $_POST['category'];
		

		if($username == "" || $category == ""){
			echo "null submission...";
		}else{

			

				$userValidationInfo = [
										 'user' => $username,
										 'cat' => $category,
										 
				      				  ];

				$allData = json_encode($userValidationInfo);
				$userData = fopen("../model/userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
				header('location: ../view/confirmProduct.html');
			
		}

	}
?>