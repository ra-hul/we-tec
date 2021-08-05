


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
      <table border="1px solid black" width='100%'>
        
      
        <tr>
          <td>Division</td>
          <td>Area</td>
          <td>Contact No</td>
          <td>Email</td>
          <td>Availability</td>
        </tr>
        <tr>
          <td>Dhaka</td>
          <td>Dhanmondi</td>
          <td>+8801720010852</td>
          <td>abc14@gmail.com</td>
          <td>24 hours</td>
        </tr>
        <tr>
          <td>Dhaka</td>
          <td>Mirpur</td>
          <td>+8801720010853</td>
          <td>abc13@gmail.com</td>
          <td>24 hours</td>
        </tr>
        <tr>
          <td>Dhaka</td>
          <td>Basundhara</td>
          <td>+8801720010854</td>
          <td>abc12@gmail.com</td>
          <td>24 hours</td>
        </tr>
        <tr>
          <td>Dhaka</td>
          <td>Uttara</td>
          <td>+8801720010855</td>
          <td>abc10@gmail.com</td>
          <td>24 hours</td>
        </tr>
        <tr>
          <td>Dhaka</td>
          <td>Azimpur</td>
          <td>+8801720010856</td>
          <td>abc09@gmail.com</td>
          <td>24 hours</td>
        </tr>
        <tr>
          <td>Dhaka</td>
          <td>Motijheel</td>
          <td>+8801720010857</td>
          <td>abc05@gmail.com</td>
          <td>24 hours</td>
        </tr>
        <tr>
          <td>Dhaka</td>
          <td>Jatrabari</td>
          <td>+8801720010858</td>
          <td>abc06@gmail.com</td>
          <td>24 hours</td>
        </tr>
      
    </table>
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