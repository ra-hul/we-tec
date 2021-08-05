<?php

function getAllOrders()
{
    $conn = getConnection();
    $sql = "select * from orders";
    $result = mysqli_query($conn, $sql);
    $orders = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($orders, $row);
    }

    return $orders;
}

function deleteOrder($id)
{
    $conn = getConnection();
    $sql = "delete from orders where oid='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
