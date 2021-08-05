<?php
session_start();
if ($_SESSION['flag'] != true) {
    header('location: login.php');
}

require_once('../model/dbConfig.php');
require_once('../model/userModel.php');

$info = getUserByName($_SESSION['username']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'internalheader.php'; ?>

    <h1 align="center">Welcome, <strong><?php echo $_SESSION['username'] ?></strong>!</h1>
    <br>
    <fieldset>
        <legend>
            <b> Staff Profile</b>
        </legend>
        <table align="">
            <tr>
                <td>
                    Full Name:
                </td>
                <td>
                    <?php echo $info['name'] ?>
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
                    Username:
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
                    Date of Birth:
                </td>
                <td>
                    <?php echo $info['date'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>



    </fieldset>

    <br>

    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "../Controller/getproduct.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

    <form>
        <select name="users" onchange="showUser(this.value)">
            <option value="">Select a product:</option>
            <option value="45">Civit</option>
            <option value="53">Napa</option>
            <option value="55">Ciprocin</option>
            <option value="56">Savlon</option>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>No product selected</b></div>
    <br>
    <br>
    <?php include 'internalfooter.php'; ?>



</body>

</html>