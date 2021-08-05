<?php
	$title= "Create Page";
	include('header.php');
?>


<div id="page_title">
	<h1>Add Another Product</h1>
</div>

<div id='nav_bar'>
	<a href="homee.php"> Back</a> |
	<a href="../controller/logout.php"> logout</a>	
</div>

<div id="main_content">
	<form method="post" action="">
		<fieldset>
			<legend>Add New</legend>
			<table>
				<tr>
					<td>Product Name</td>
					<td><input type="text" name="username" value=""> </td>
				</tr>
				<tr>
					<td>Category</td>
					<td><input type="text" name="category" value=""> </td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>

<?php 
	include('footer.php'); 
	if(isset($_POST['create']))
	{
		if($_POST['username'] == "" || $_POST['category'] == ""){
			echo "null submission...";
		}else{

				$userValidationInfo = [
										 'user' => $_POST['username'],
										 'cat' => $_POST['category'],
										 #'rPass' => $_POST['repass'],
										 #'email' => $_POST['email'],
	      							  ];

				$allData = json_encode($userValidationInfo);
				$userData = fopen("../model/userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
			echo "New Product Added Finally!!!!!";
		}
	}
?>