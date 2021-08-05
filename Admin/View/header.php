<?php
    session_start();
    if(!isset($_SESSION['flag']))
    {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        index
    </title>
</head>
<body background="../Asset/bg.jpg">
    <fieldset>
        <div>
            <br />
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="home.html">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>