<?php
$title = "View Profile";
include('header.php');
require_once('../model/db.php');
require_once('../model/userModel.php');

$info = getUserByName($_SESSION['username']);
?>

<td>
    <fieldset>
        <legend><b>PROFILE</b></legend>
        <table width='100%'>
            <tr>
                <td>
                    Full Name:
                </td>
                <td>
                    <?php echo $info['name'] ?>
                </td>
                <td rowspan="8" align="center">
                    <img src='../asset/user.png' height="150px" />
                    <br><a href='changepic.php'>Change Picture</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?php echo $info['email'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <?php echo $info['gender'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    User name:
                </td>
                <td>
                    <?php echo $info['username'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth:
                </td>
                <td>
                    <?php echo $info['date'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                    <a href='updateinformation.php'>Update Information</a>
                </td>
            </tr>
        </table>
    </fieldset>
</td>