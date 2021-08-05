<!DOCTYPE html>
<html>

<head>
    <title>Reg</title>
     <script type="text/javascript" src="../Js/JSformValidation"></script>
    <link rel="stylesheet" type="text/css" href="../Css/styles.css">
</head>

<body background="../Asset/bg.jpg">
        <div>
            <br />
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="login.php">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="registration.html">REGISTRATION</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>
    <fieldset>
        <legend>
            <b>REGISTRATION</b>
        </legend>
        <form action="../Controller/checkreg.php" onsubmit="return validate()" method=' POST' name="reg">
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
</body>

</html>