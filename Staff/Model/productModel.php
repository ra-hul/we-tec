<?php

function insertProduct($arr)
{
	$conn = getConnection();
	$sql = "insert into products (p_id, p_name, p_type, manufacturer, stock, mrp) values('', '{$arr[0]}', '{$arr[1]}', '{$arr[2]}', '{$arr[3]}', '{$arr[4]}')";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}



function getAllProduct()
{
	$conn = getConnection();
	$sql = "select * from products";
	$result = mysqli_query($conn, $sql);
	$products = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($products, $row);
	}

	return $products;
}

function getProductForAJAX($q)
{

	$conn = getConnection();
	$sql = "select * from products where p_id= '" . $q . "'";
	$result = mysqli_query($conn, $sql);

	return $result;
}






function getProductById($id)
{

	$conn = getConnection();
	$sql = "select * from products where p_id='{$id}'";
	$result = mysqli_query($conn, $sql);

	return $result;
}

function updateProduct($id, $arr)
{

	$conn = getConnection();
	$sql = "update products set p_name = '{$arr[0]}', p_type='{$arr[1]}', manufacturer='{$arr[2]}', stock='{$arr[3]}', mrp='{$arr[4]}' where p_id='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}

function deleteProduct($id)
{
	$conn = getConnection();
	$sql = "delete from products where p_id='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}
