<?php
	$title= "Home Page";
	include('header.php');
?>
	

	<div id="page_title">
			<?php
				$userFile = fopen("../Model/userValidationInfo.json", "r");
				$userData = fread($userFile, filesize('../Model/userValidationInfo.json'));
				$userInfo = json_decode($userData, true);
				$username = $userInfo['user']; 
			?>		
	</div>

	<div id='nav_bar'>
		<a href="user_list.php"> View Owner</a>
	</div>

	<div id="main_content">
		
	</div>


<?php include('footer.php'); ?>