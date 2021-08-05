<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
        .warning {
            color: red;
        }
    </style>

</head>

<body>
    <?php include 'publicHeader.php'; ?>
    <fieldset>
        <legend>
            <b>REGISTRATION</b>
        </legend>
        <form action="" onsubmit="return validate()" method=' POST' name="reg">
            <table align="">

                <tr>
                    <td><label for="role">Register As</label></td>
                    <td colspan="2">

                        <input type='radio' name='role' value='1'>Owner
                        <input type='radio' name='role' value='2'>Admin
                        <input type='radio' name='role' value='3'>Staff
                        <input type='radio' name='role' value='4'>Customer

                    </td>
                    <td id="role" class="warning"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Full Name:
                    </td>
                    <td>
                        <input type="text" name='name'>
                    </td>
                    <td id="name" class="warning"></td>
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
                        <input type="email" name='email'>
                    </td>
                    <td id="email" class="warning"></td>

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
                        <input type="username" name='username'>
                    </td>
                    <td id="user" class="warning"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='password'>
                    </td>
                    <td id="pass" class="warning"></td>

                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" name='confirmpassword'>
                    </td>
                    <td id="confirmpass" class="warning"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fav">Favourite Color: </label>
                    </td>
                    <td>
                        <input type="text" name='fav'>
                    </td>
                    <td id="fav" class="warning"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Date of Birth:</label>
                    </td>
                    <td>
                        <input type="date" name='date'>
                    </td>
                    <td id="date" class="warning"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>
                                <b>Gender</b>
                            </legend>
                            <input type='radio' name='gender' value='male'>Male
                            <input type='radio' name='gender' value='female'>Female
                            <input type='radio' name='gender' value='others'>Others
                        </fieldset>
                    </td>
                    <td id="gender" class="warning"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit' formmethod="post" formaction="../Controller/checkreg.php">
                        <input type='reset' value='Reset'>
                        Already have an account?
                        <a href='./login.php'>Login here!</a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <br>
    <?php include 'publicFooter.php'; ?>
    <script src="../Controller/JSformValidation.js"></script>
</body>

</html>