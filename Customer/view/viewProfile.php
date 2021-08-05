<?php
session_start();
if (isset($_SESSION['flag'])) {
	require_once('../model/Webtech.php');
	require_once('../model/userModel.php');

	$info = getUserByName($_SESSION['username']);
?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>View Profile</title>
	</head>

	<body>
		<table border="1" width="100%" cellspacing="0">
			<tr>
				<td align="right" colspan="3">
					<?php include 'head.php'; ?>

				</td>
			</tr>
			<tr height="200px">
				<td width="33%">
					<h4> &nbsp &nbsp &nbsp Account </h4>
					<hr width="90%">
					<ul>
						<?php include 'item.php'; ?>

					</ul>
				</td>
				<td colspan="2" align="center">
					<br>
					<fieldset style="width: 50%">
						<legend> <b> PROFILE </b> </legend>
						<table>
							<tr>
								<td>
									<b>Full Name:</b>
								</td>
								<td colspan="2">
									<?php echo $info['name'] ?>
								</td>
								<td rowspan="5">
									&nbsp &nbsp &nbsp &nbsp &nbsp
									<!--<img src="user.png" alt="User Profile Picture" width="150" height="100">
								<a> <img src="../asset/user.png" alt="User Profile Picture" width="150" height="100" > </a> 

								<p align="center"> <a href="changeProfilePicture.php"> Change </a> </p>
	-->
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<hr>
								</td>
							</tr>
							<td>
								<b>User Name:</b>
							</td>
							<td>
								<?php echo $info['username'] ?>
							</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
			<tr>
			<tr>
				<td>
					<b>Email:</b>
				</td>
				<td>
					<?php echo $info['email'] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
			<tr>
				<td>
					<b>Gender:</b>
				</td>
				<td>
					<?php echo $info['gender'] ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr>
				</td>
			</tr>
			<tr>
				<td>
					<b>Date of Birth:</b>
				</td>
				<td>
					<?php echo $info['date'] ?>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<hr>
				</td>
			</tr>
			<tr>
				<td>
					<a href="editProfile.php"> Edit Profile </a>
				</td>
			</tr>
		</table>
		</fieldset>
		<br>
		</td>
		</tr>
		<tr height="50px">
			<td colspan="3">
				<?php include 'foot.php'; ?>

			</td>
		</tr>
		</table>
	</body>

	</html>

<?php

} else {
	echo "Please do Registration before login in";
	header('location: registration.php');
}

?>