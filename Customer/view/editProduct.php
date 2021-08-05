<?php
	session_start();
	require_once('../model/dbConnection.php');
	require_once('../model/productModel.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$selectedProduct = getProductById($id);
	$_SESSION['id'] = $id;
?>

<div id="main_content">
	<form method="post" action="../controller/updateCheck.php">
		<fieldset style="width: 10%">
			<legend>Edit</legend>
			<table>
				<tr>
					<td>Name</td>
				</tr>
				<tr>
					<td><input type="text" name="name" value="<?php echo $selectedProduct['Name'] ?>"> </td>
				</tr>
				<tr>
					<td>Buying Price</td>
				</tr>
				<tr>
					<td><input type="text" name="bPrice" value="<?php echo $selectedProduct['Price'] ?> "> </td>
				</tr>
				
				<tr>
					<td>
						<input type="checkbox" name="check" <?php if($selectedProduct['Display'] == 'Yes') { echo "checked";} ?>  > Display
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="update" value="Save">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>