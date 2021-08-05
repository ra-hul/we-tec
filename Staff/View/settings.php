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
    <title>Settings</title>
</head>

<body>
    <?php include 'internalheader.php'; ?>

    <fieldset>
        <legend>Change Password</legend>
        <form action='../Controller/changepass.php' method='POST'>
            <table align="">
                <tr>
                    <td>
                        Old Password:
                    </td>
                    <td>
                        <input type="password" name='oldpassword'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        New Password:
                    </td>
                    <td>
                        <input type="password" name='password'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm New Password:
                    </td>
                    <td>
                        <input type="password" name='confirmpassword'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                    </td>
                </tr>
            </table>
        </form>

    </fieldset>
    <br>
    <?php include 'internalfooter.php'; ?>

</body>

</html>