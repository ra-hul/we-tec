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
				<form method="post" action="../controller/checkDelivery.php">
                    <fieldset align="center">
                    <legend>Home Delivery</legend>
					<legend>Location</legend>
			        <input type="text" name="category" value=""> <br>
            
					<legend>Date</legend>

					<input type="text" name="myname" value=""> <br>
			        <input type="checkbox" name="check"> Display
			
			<hr>
                <input type="submit" name="submit" value="Submit">
                
            </fieldset>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
			<?php include 'foot.php';?>

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