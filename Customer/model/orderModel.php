<?php

function insertProduct($arr)
{
	$conn = getConnection();
	$sql = "insert into orders (oid, cid, o_value, ship_method, ship_address) values('', '{$arr['cid']}', '{$arr['o_value']}', '{$arr['ship_method']}', '{$arr['ship_address']}')";
   # $sql = "insert into orders values('', '{$productDetails['category']}','{$productDetails['myname']}' ,'{$productDetails['method']}','{$productDetails['amount']}')";


	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}



function getAllProduct()
{
	$conn = getConnection();
	$sql = "select * from orders";
	$result = mysqli_query($conn, $sql);
	$products = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($products, $row);
	}

	return $products;
}

function getUpdate($q)
{

	$conn = getConnection();
	$sql = "select * from orders where p_id= '" . $q . "'";
	$result = mysqli_query($conn, $sql);

	return $result;
}






function getOrdersbyID($id)
{

	$conn = getConnection();
	$sql = "select * from orders where p_id='{$id}'";
	$result = mysqli_query($conn, $sql);

	return $result;
}

function updateProduct($id, $arr)
{

	$conn = getConnection();
	$sql = "update products set oid = '{$arr[0]}', cid='{$arr[1]}', o_value='{$arr[2]}', ship_method='{$arr[3]}', ship_address='{$arr[4]}' where oid='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}

function deleteProduct($id)
{
	$conn = getConnection();
	$sql = "delete from orders where p_id='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}
