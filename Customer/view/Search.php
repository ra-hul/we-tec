<?php
	
	

	$name = $_REQUEST['name'];
	
	$conn = mysqli_connect('localhost', 'root', '', 'product_db');
	$sql = "select * from products where Name like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$response = "<table border=1>
					<tr>
						<td>id</td>
						<td>Name</td>
						<td>Price</td>
						<td>Display</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							<td>{$row['id']}</td>
							<td>{$row['Name']}</td>
							<td>{$row['Price']}</td>
							<td>{$row['Display']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>