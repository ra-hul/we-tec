<?php

require_once('dbConfig.php');


function insertsalary($user)
{
    $conn = getConnection();
    $sql = "insert into salary values('', '{$user['etype']}', '{$user['amount']}', '{$user['month']}','')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getAllempoloyeeSalary()
{
    $conn = getConnection();
    $sql = "select * from salary";
    $result = mysqli_query($conn, $sql);

    return $result;
}

function deleteSal($id)
{
    $conn = getConnection();
    $sql = "delete from salary where sal_id='{$id}'";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
