<?php

	function insertProduct($productDetails)
	{
		$conn = getConnection();
		#$sql = "insert into feedback values('', '{$productDetails['myname']})";
        #$sql = "insert into feedback values('', '{$productDetails['myname']}')";
		#$sql = "insert into complain (id,user_Name,Product_Name, Complain)values('', '{$productDetails['category']}','{$productDetails['product']}', '{$productDetails['myname']}')";
        $sql = "insert into complain values('', '{$productDetails['category']}', '{$productDetails['product']}', '{$productDetails['myname']}')";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getAllProduct()
	{
		$conn = getConnection();
		$sql = "select * from complain";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users;
	}

	function getProductById($id)
	{

		$conn = getConnection();
		$sql = "select * from complain where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	/*function updateProduct($id, $productDetails)
	{

		$conn = getConnection();
		$sql = "update products set name = '{$productDetails['name']}', buyingPrice='{$productDetails['buyingPrice']}', sellingPrice='{$productDetails['sellingPrice']}', displayable='{$productDetails['displayable']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function deleteProduct($id)
	{
		$conn = getConnection();
		$sql = "delete from products where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}*/
?>


