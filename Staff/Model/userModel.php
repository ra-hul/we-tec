<?php

require_once('dbConfig.php');

function validateUser($username, $password)
{
	$conn = getConnection();
	$sql = "select * from users where username='{$username}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if (!$row) {
		return false;
	}

	if (count($row) > 0) {
		return true;
	} else {
		return false;
	}
}

function insertUser($user)
{
	$conn = getConnection();
	$sql = "insert into users(uid, name, username, email, gender, date, fav, roll, password) values('', '{$user['name']}', '{$user['username']}', '{$user['email']}', '{$user['gender']}', '{$user['date']}', '{$user['fav']}', '{$user['roll']}', '{$user['password']}')";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}

function getUserByID($id)
{
	$conn = getConnection();
	$sql = "select * from users where uid='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}
function getUserByName($u)
{
	$conn = getConnection();
	$sql = "select * from users where username='{$u}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getRole($u)
{
	$conn = getConnection();
	$sql = "select roll from users where username='{$u}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}





function getAllUser()
{
	$conn = getConnection();
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function updateUser($user)
{
	$conn = getConnection();
	$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type='{$user['user']}' where id={$user['id']}";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}

function updateProduct($id, $arr)
{

	$conn = getConnection();
	$sql = "update users set name = '{$arr[0]}', email='{$arr[1]}', fav='{$arr[2]}', date='{$arr[3]}', gender='{$arr[4]}' where uid='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}


function deleteUser($id)
{
	$conn = getConnection();
	$sql = "delete from users where id={$id}";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}
