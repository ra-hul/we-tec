<?php
	$title= "User list Page";
	include('header.php');
?>


	<div id="main_content">
		<table border="1">

			<?php

				$userFile = fopen("../Model/userValidationInfo.json", "r");
				$userData = fread($userFile, filesize('../Model/userValidationInfo.json'));
				$userInfo = json_decode($userData, true);

				$username = $userInfo['user'];
				$email = $userInfo['email'];
			?>

			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
			<tr>
				<td>1</td>
				<td> <?php echo $username; ?> </td>
				<td> <?php echo $email; ?> </td>
				<td>
					<a href="edit.php">EDIT</a> |
					<a href="delete.php">DELETE</a> 
				</td>
			</tr>
		</table>
	</div>

<?php include('footer.php'); ?>