<?php
	$title= "Delete Page";
	include('header.php');

	$userFile = fopen("../model/userValidationInfo.json", "r");
	$userData = fread($userFile, filesize('../model/userValidationInfo.json'));
	$userInfo = json_decode($userData, true);

	$username = $userInfo['user'];
?>

<div id="page_title">
	<h1>Delete Product</h1>
</div>

<div id='nav_bar'>
	<a href="user_list.php"> Back</a> |
  <a href="../controller/logout.php"> logout</a>	
</div>


<div id="main_content">
	<form method="post" action="../controller/delProduct.php">
		<table>
			<tr>
				<td> <?php echo "Are you sure to delete $username'" ?> </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="delete" value="Delete">
				</td>
			</tr>
		</table>
	</form>
</div>

