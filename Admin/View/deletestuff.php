<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../model/usermodel.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$stuff = getstuffbyid($id);
	$_SESSION['id'] = $id;
?>
<div id="main_content">
	<form method="POST" action="../Controller/deletestuffcheck.php">
		<fieldset>
			<legend>Delete Stuff</legend>
			Name: <?php echo $stuff['name']; ?> <br>
			User Name: <?php echo $stuff['username']; ?> <br>
			Email: <?php echo $stuff['email']; ?> <br>
			Password: <?php echo $stuff['password']; ?> <br>
			Authorized By Admin: <?php  if($stuff['displayable'] == 'Yes') { echo "Yes";} else { echo "No";} ?>
			<hr>
			<input type="submit" name="delete" value="Delete">
		</fieldset>
	</form>
</div>
