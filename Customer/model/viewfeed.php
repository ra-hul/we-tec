<?php
require_once('db.php');

function getAllfeed()
{
    $conn = getConnection();
    $sql = "select * from contactcustomer";
    $result = mysqli_query($conn, $sql);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($data1, $row);
    }
    return $data1;
}
?>