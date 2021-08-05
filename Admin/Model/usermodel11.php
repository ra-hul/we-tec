<?php
	
require_once('db.php');

function validateUser($username, $password){
	$conn = getConnection();
	$sql = "select * from registration where username='{$username}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}

function insertUser($user)
{
	$conn = getConnection();
	$sql = "insert into registration values('', '{$user['name']}', '{$user['email']}', '{$user['username']}', '{$user['password']}')";

	$result = mysqli_query($conn, $sql);

	if($result){
		return true;
	}else{
		return false;
	}

}


function getAllUser()
{
	$conn = getConnection();
	$sql = "select * from registration";
	$result = mysqli_query($conn, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}
	return $users;
}

	function updateuser($id, $user)
	{

		$conn = getConnection();
		$sql = "update registration set name = '{$user['name']}', email='{$user['email']}', username='{$user['username']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

		function getuserbyid($id)
	{

		$conn = getConnection();
		$sql = "select * from registration where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
		function getuserbyusername($username)
	{

		$conn = getConnection();
		$sql = "select * from registration where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function deleteuser($id)
	{
		$conn = getConnection();
		$sql = "delete from registration where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function insertstuff($stuff)
	{
		$conn = getConnection();
	    $sql = "insert into stuff values('', '{$stuff['name']}', '{$stuff['username']}', '{$stuff['email']}', '{$stuff['password']}','{$stuff['displayable']}')";
	    $result = mysqli_query($conn, $sql);
	    if($result)
	    {
	    	return true;
	    }
	    else
	    {
	    	return false;
	    }
	}
	function getAllstuff()
{
	$conn = getConnection();
	$sql = "select * from stuff";
	$result = mysqli_query($conn, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}
	return $users;
}

function updatestuff($id, $stuff)
	{

		$conn = getConnection();
		$sql = "update stuff set name = '{$stuff['name']}', username='{$stuff['username']}', email='{$stuff['email']}', password ='{$stuff['password']}',displayable='{$stuff['displayable']}' where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

		function getstuffbyid($id)
	{

		$conn = getConnection();
		$sql = "select * from stuff where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function deletestuff($id)
	{
		$conn = getConnection();
		$sql = "delete from stuff where id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function UserNameQuery($username){

		$conn = getConnection();
		$sql = "select * from registration where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_num_rows($result);

		return $row;
	}

	function getAllInventoryList(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}


?>