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
					<form method="POST" action="../controller/upadateinfocheck.php">
						<fieldset style="width: 50%">
							<legend> <b>REGISTRATION</b></legend>
							<table>
								<tr>
									<td>
										User ID:
									</td>
									<td>
										<input type="text" name='abc' value=" <?php echo $info['uid'] ?>">
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr>
									</td>
								</tr>

								<tr>
									<td>Full NAme </td>
									<td> : &nbsp <input type="text" name="fName" value="<?php echo $info['name'] ?>" size="35%" />
										<br />
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr>
									</td>
								</tr>

								<tr>
									<td> Email </td>
									<td> : &nbsp <input type="email" name="Email" value=" <?php echo $info['email'] ?>" size="35%" />
										<br />
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr>
									</td>
								</tr>
								<tr>
									<td> Gender </td>
									<td> : &nbsp <input type="text" name="gender" value="<?php echo $info['gender'] ?>" size="35%" />
										<br />
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<hr>
									</td>
								</tr>

								<tr>
									<td>
										<label for="date">Date of Birth:</label>
									</td>
									<td>
										<input type="date" name='date' size="35%">
									</td>
									<td id="date" class="warning"></td>


							</table>






							<hr>
							<input type="submit" name="Submit" value="Submit">

					</form>
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