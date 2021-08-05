<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../Model/productModel.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$selectedProduct = getProductById($id);
	$_SESSION['id'] = $id;
?>

<div id="main_content">
	<form method="POST" action="../controller/deleteCheck2.php">
		<fieldset>
			<legend>DELETE EXPENSE and INCOME</legend>
			Name: <?php echo $selectedProduct['name']; ?> <br>
			Expense: <?php echo $selectedProduct['buyingPrice']; ?> <br>
			Income: <?php echo $selectedProduct['sellingPrice']; ?> <br>
			Authorized By Admin: <?php  if($selectedProduct['displayable'] == 'Yes') { echo "Yes";} else { echo "No";} ?>
			<hr>
			<input type="submit" name="delete" value="Delete">
		</fieldset>
	</form>
</div>