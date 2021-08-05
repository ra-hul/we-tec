<?php
require_once('db.php');

	function insertstock($stock)
	{
		$conn = getConnection();
		$sql = "insert into orderstock values('', '{$stock['name']}', '{$stock['email']}', '{$stock['amount']}', '{$stock['payment']}', '{$stock['displayable']}' )";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function getallstock()
	{
		$conn = getConnection();
		$sql = "select * from orderstock";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users;
	}

	function getstockbyid($id)
	{

		$conn = getConnection();
		$sql = "select * from orderstock where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

function updatestock($id, $stock)
	{

		$conn = getConnection();
		$sql = "update orderstock set name = '{$stock['name']}', email='{$stock['email']}', amount='{$stock['amount']}', displayable = '{$stock['displayable']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function deletestock($id)
	{
		$conn = getConnection();
		$sql = "delete from orderstock where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>





