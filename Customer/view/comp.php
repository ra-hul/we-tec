
<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
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
			<td colspan="2">
			<form method="POST" action="../controller/checkComp.php" onsubmit="return validateform()">

			<script type="text/javascript" src="rare.js"></script>

		<fieldset>
		<!--<h3 id="head">Complain</h3>

			<legend>Complain</legend>
			<input type="text" name="myname" id="name" value="" onkeyup="NameValidation()" height: 200px> <br>
			<hr>-->
			<h1 id="head">Complain</h1>

				<legend>Complain</legend>
				<legend>UserName</legend>
			   <input type="text" name="category" id="category" value="" onkeyup="CategoryValidate()"> <br>
            
              
                <br>
                <legend>Product name</legend>
			   <input type="text" name="product" id="product" value="" onkeyup="NameValidation()"> <br>
			   <br>
			   <legend>Comments</legend>
			   <input type="text" name="myname" id="myname" value="" onkeyup="NameValidation()"> <br>
			 <!--  <input type="checkbox" name="check"> Display-->
			
			<hr>
			<input type="submit" name="submit" value="Submit" onclick="NameValidation()">
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> Sister concern of ABC Pharmacy </center>
			</td>
		</tr>
	</table>
</body>
</html>

<?php

	}else{
		echo "Please do Registration before login in";
		header('location: registration.php');
	}

?>