<?php
	$title= "Edit Page";
	include('header.php');

?>

<?php

	$userFile = fopen("../Model/userValidationInfo.json", "r");
	$userData = fread($userFile, filesize('../Model/userValidationInfo.json'));
	$userInfo = json_decode($userData, true);

	$username = $userInfo['user'];
	$password = $userInfo['pass'];
	$email = $userInfo['email'];
?>

<div id="main_content">
	<form method="post" action="">
		<fieldset>
			<legend>Create New</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $username ?>"> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo $password ?> "> </td>
				</tr>
			
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo $email ?> "> </td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="update" value="Update">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>

<?php 
	include('footer.php');

	if(isset($_POST['update']))
	{
		$userValidationInfo = [
						 'user' => $_POST['username'],
						 'pass' => $_POST['password'],
						 'email' => $_POST['email'],
      				  ];

		$allData = json_encode($userValidationInfo);
		$userData = fopen("../Model/userValidationInfo.json", "w");
		fwrite($userData, $allData);
		fclose($userData);
		header('location: user_list.php');
	}
?>