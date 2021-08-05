<?php
require_once('db.php');

function insertissue($stock)
{
    $conn = getConnection();
    $sql = "insert into issues values('', '{$user['Username']}', '{$user['User Type']}', '{$user['Priority']}', '{$user['Comments']}' '{$user['progress']}','')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getallstock()
	{
		$conn = getConnection();
		$sql = "select * from issues";
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
		$sql = "select * from issues where id ='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

function updatestock($id, $stock)
	{

		$conn = getConnection();
		$sql = "update issues set progress = '{$stock['progress']}' where id ='{$id}'";
		
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
		$sql = "delete from issues where id ='{$id}'";
		
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
