<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Request Medicine</title>
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
                <h1>Select Category and write down your foreign medicine</h1>
                <h3>You will get your product within 72 hours</h3>
				<form method="post" action="../controller/checkRare.php"  onsubmit="return validateform()">
                    <fieldset align="center">
                    <script type="text/javascript" src="rare.js"></script>

                    
                  <!-- <legend>Category</legend>
            
                        <select name="select">
                                <option value="Tablet" selected>Tablet</option>
                                <option value="Syrup">Syrup</option>
                                <option value="Drop">Drop</option>
                                <option value="Others">Others</option>
                                
                            </select>-->
				<h1 id="head">Foreign Medicine</h1>

				<legend>Foreign</legend>
				<legend>Category</legend>
			   <input type="text" name="category" id="category" value="" onkeyup="CategoryValidate()"> <br>
            
              
                <br>
                <legend>Name of Product</legend>
			   <input type="text" name="myname" id="myname" value="" onkeyup="NameValidation()"> <br>
			   <input type="checkbox" name="check"> Display
			
			<hr>
                <input type="submit" name="submit" value="Submit" onclick="NameValidation(); CategoryValidate(); MethodValidate(); AmountValidate()";>
			
            
              
            
                
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