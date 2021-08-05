

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
			<?php include 'head.php';?>

			</td>
		</tr>
		

		<tr height = "500px">
			<td colspan="2" align="center">
				<br>
				<form method="POST" action="../controller/checkreg.php" onsubmit="return validateform()">
				<script type="text/javascript" src="registration.js"></script>

				<fieldset style="width: 25%">
					<legend> <b>REGISTRATION</b></legend>
						<table>
							<tr>
								<td> Name </td>
								<td> :<input type="text" name="Name" id="name"  onblur="NameValidation()"> 
								<span id="nname" >  <span>
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> Email </td>
								<td> :<input type="email" name="Email" id="email" onblur="EmailValidation()">
								<span id="eemail" >  <span>
 
								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> User Name </td>
								<td> :<input type="text" name="UserName" id="username"   onblur="UserNameValidation()"> 
								<span id="uname" >  <span>

								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> Password </td>
								<td> :<input type="password" name="Password" id="Pass"  onblur="PasswordValidation()"> 
								<span id="pass" >  <span>

								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
							<tr>
								<td> Confirm Password </td>
								<td> :<input type="password" name="cPassword" id="CPass" onblur="ConfirmValidation()"> 
								<span id="cpass" >  <span>

								<br/> </td>
							</tr>
							<tr> <td colspan="2"> <hr> </td> </tr>
					</table>
						<fieldset>
							<legend>Gender</legend>
							    <input type='radio' name='gender' value='Male' id="male" onblur="GenderValidation()">Male
								<span id="Male" >  <span>

		            			<input type='radio' name='gender' value='Female' id="female" onblur="GenderValidation()">Female
								<span id="Female" >  <span>

		            			<input type='radio' name='gender' value='Others' id="others" onblur="GenderValidation()">Others
								<span id="Others" >  <span>

						</fieldset>

						<fieldset>
							<legend>Date of Birth</legend>
									<input type="number" name="date" min="1" max = "31" size="4" id="date"> /
									<span id="Date" >  <span>

									
									

									<input type="number" name="month" min="1" max = "12" size="4" id="month"> /
									<span id="Month" >  <span>
									


									<input type="number" name="year" min="1900" max = "2100" size="4" id="year"> <i> (dd/mm/yyyy) </i>

									<span id="Year" >  <span>

						</fieldset>
					<hr>
					<input type="reset" name="Reset" value="Reset">
					<input type="submit" name="Submit" value="Submit">
				</fieldset>
				</form>
			<br>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="2">
			<?php include 'foot.php';?>

			</td>
		</tr>
	</table>
</body>
</html>