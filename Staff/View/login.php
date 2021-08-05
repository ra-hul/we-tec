<?php


require_once('../model/dbConfig.php');
require_once('../model/userModel.php');
$u = $_POST['logusername'] ?? "";

$info = getUserByName($u);


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
    <?php include 'publicHeader.php'; ?>
    <fieldset>
        <legend>
            LOGIN
        </legend>
        <form action='../Controller/checklogin.php' name="login" method='POST'>
            <table>
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name='logusername'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='logpassword'>
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
                        Don't have an account?
                        <a href='./reg.php'>Create One!</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    </td>
                </tr>

            </table>
        </form>

        <table>
            <tr>
                <td style="color: red;" id="warning"></td>
            </tr>
        </table>
    </fieldset>
    <br>
    <script>
        function auth() {
            const logpass = document.login.logpassword.value;
            const loguser = document.login.logusername.value;
            const user = "<?php echo $info['username']; ?>".replace(" ", "");
            const pass = "<?php echo $info['password']; ?>".replace(" ", "");

            if (loguser != user) {
                document.querySelector("#warning").innerHTML = "Wrong Credentials!";
                return false;
            }

            if (logpass != pass) {
                document.querySelector("#warning").innerHTML = "Wrong Credentials!";
                return false;
            }
            return true;

        }
    </script>

    <?php include 'publicFooter.php'; ?>
</body>

</html>