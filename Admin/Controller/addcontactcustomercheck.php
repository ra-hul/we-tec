<?php
	session_start();
	require_once('../Model/contactcustomermodel.php');

	if(isset($_POST['submit'])){

		$text = $_POST['text'];
		

		if($text == ""){
			echo "null value found...";
		}else{
		
			$status = insertContactCustomer($text);				

			if($status){
				header('location: ../View/contactcustomer.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>