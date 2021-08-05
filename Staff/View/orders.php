<?php
session_start();
if ($_SESSION['flag'] != true) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>

    <?php include 'internalheader.php'; ?>
    <br>
    <h2 align="center">Accepted Orders</h2>
    <?php require("../Controller/orderProcess.php"); ?>
    <center>
        <button onclick="window.print()">Print Order Report</button>
    </center>
    <?php include 'internalfooter.php'; ?>
    <br>
    <br>

</body>

</html>