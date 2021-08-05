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
			<h2>-------- Product-------</h2>

            <ul>

            <!--<li> <a href="homedelivery.php">Home Delivery</a> </li>
            <li> <a href="chooseDesire.php">Choose Desire Product</a> </li>
			<li> <a href="addCart.html"> Add Cart</a> </li>-->
            <li> <a href="comp.php">Complain for the Product</a> </li>
			<li> <a href="ReturnProduct.php">Return Product</a> </li>
			<li> <a href="indexxxx.php">Add Cart</a> </li>




				

				</ul>
				 
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
		header('location: login.php');
	}

?>