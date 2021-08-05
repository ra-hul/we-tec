<?php
session_start();
if ($_SESSION['flag1'] != true) {
    header('location: login.php');
}

if (isset($_POST['cPassword']) && isset($_POST['nPassword']) && isset($_POST['rnPassword'])) {
    if ($_POST['nPassword'] == $_POST['cPassword']) {
        echo "New Password should not be same as the Current Password\r\n";
        $s = false;
    }

    if ($_POST['nPassword'] != $_POST['rnPassword']) {
        echo "New Password must match with the Retyped Password";
        $s = false;
    } else {
        $s = true;
    }
    if ($s == true) {
        echo "New Password Change Successfully";
    }
}


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
			<?php include 'head.php';?>

			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<ul>
				<?php include 'item.php';?>

				</ul>
			</td>
			<td colspan="2" align="center">
				<br>
				<form method="POST" action=""  onsubmit="return validateform()">
				<script type="text/javascript" src="change.js"></script>

				<fieldset style="width: 50%">
					<legend> <b> CHANGE PASSWORD </b></legend>
						<table>
							<tr>
								<td> Current Password: </td>
								<td>
									<input type="password" name="cPassword" id="cPass" onblur="CurrentValidation()">
									<span id="CPass" >  <span>

								</td>
							</tr>

							<tr>
								<td>
									New Password:
								</td>
								<td>
									<input type="password" name="nPassword" id="nPass" onblur="NewValidation()">
									<span id="NPass" >  <span>

								</td>
							</tr>

							<tr>
								<td>
									Retype New Password:
								</td>
								<td>
									<input type="password" name="rnPassword" id="rPass" onblur="RenewValidation()" >
									<span id="RPass" >  <span>


								</td>
							</tr>
						</table>
				</fieldset>
					<hr width="80%">
					<input type="submit" name="Submit" value="Submit">
				</fieldset>
				</form>
				<br> 
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> Sister Concern of ABC Pharmacy</center>
			</td>
		</tr>
	</table>
</body>
</html>