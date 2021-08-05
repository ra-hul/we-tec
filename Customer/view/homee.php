<?php
	$title= "Home Page";
	include('header.php');
?>
	

	<div id="page_title" align="center">
		<h1> Product  </h1>
			<?php
				$userFile = fopen("../model/userValidationInfo.json", "r");
				$userData = fread($userFile, filesize('../model/userValidationInfo.json'));
				$userInfo = json_decode($userData, true);
				$username = $userInfo['user'];
				#echo $username; 
			?>		
		</h1>
	</div>

	<div id='nav_bar' align="center">
		<a href="create.php"> Add  New Product</a> |
		<a href="user_list.php"> View Product</a> |
		<a href="../controller/logout.php"> logout</a>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>

	<div id="main_content">
		
	</div>


<?php include('footer.php'); ?>