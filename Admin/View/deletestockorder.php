<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../Model/stockmodel.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$stockk = getstockbyid($id);
	$_SESSION['id'] = $id;
?>

<div id="main_content">
	<form method="POST" action="../Controller/deletestockvalidation.php">
		<fieldset style="width: 20%">
			<legend>DELETE PRODUCT</legend>
			Name: <?php echo $stockk['name']; ?> <br>
			Email: <?php echo $stockk['email']; ?> <br>
			Quantity: <?php echo $stockk['amount']; ?> <br>
			Payment Amount: <?php echo $stockk['payment']; ?> <br>
			Authorized by Admin: <?php  if($stockk['displayable'] == 'Yes') { echo "Yes";} else { echo "No";} ?>
			<hr>
			<input type="submit" name="submit" value="Delete">
		</fieldset>
	</form>
</div>