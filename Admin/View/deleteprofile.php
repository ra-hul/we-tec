<?php
	session_start();
	require_once('../Model/db.php');
	require_once('../model/usermodel.php');
	$id = $_GET['id'];
	$connection = getConnection();
	$userr = getuserbyid($id);
	$_SESSION['id'] = $id;
?>

<div id="main_content">
	<form method="POST" action="../Controller/deletecheck.php">
		<fieldset>
			<legend>Delete user</legend>
			Name: <?php echo $userr['name']; ?> <br>
			Email: <?php echo $userr['email']; ?> <br>
			User Name: <?php echo $userr['username']; ?> <br>
			<hr>
			<input type="submit" name="delete" value="Delete">
		</fieldset>
	</form>
</div>
