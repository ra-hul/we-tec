

	<?php
	$host = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'web-tech';
	function getConnection()
	{
		global $host, $dbUser, $dbPass, $dbName;
		$conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);
		return $conn;
	}
	?>