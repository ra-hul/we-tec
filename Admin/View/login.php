<?php 
    $title= "Login Page";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log in</title>
    <script type="text/javascript" src="../Js/loginScript.js"></script>
    <link rel="stylesheet" type="text/css" href="../Css/styles.css">
</head>

<body background="../Asset/bg.jpg" width="100%" height="100%">
        <div>
            <br/>
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="login.php">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="registration.html">REGISTRATION</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
                </div>
                <tr>
                    <td>

                <fieldset>
                    <legend><b>Login</b></legend>
                    <table>
                        <form method="post" action="../Controller/logincheck.php" onsubmit="return loginCheckValidation()">
                            <tr>
                                <td>User Name</td>
                                <td>
                                    <input type="text" name="username" id="username" placeholder="username" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username'];}?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span id="user" class="user-error"></span><hr>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="password" name="password" id="password" placeholder="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span id="pass" class="user-error"></span><hr>
                                    
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <input type="checkbox" name="remember" <?php if (isset($_COOKIE['username'])){ echo "checked";} ?>> Remember Me
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                    <a href="fpass.html">Forgot Poassword?</a>
                                </td>

                            </tr>
                        </form>
                    </table>
                </fieldset>
            </td>
        </tr>
        <br><br><br><br><br>
        <div>
            <hr color="#000" width="20%">
                <p align="center"><font face="sans-serif" color="#017bf5" size="5.5">CONTACT</font></p>
            <hr color="#000" width="20%">
            <br><br>
            <form method="post" action="../Controller/checkcontact.php">
                <table align="center" cellpadding="5" cellspacing="12" border="1" height="200">
                    <tr>
                        <td>
                            <input type="text" name="name" placeholder="Name" required="required" />
                        </td>
                        <td>
                            <input type="text" name="username" placeholder="Username" required="required" />
                        </td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" placeholder="Email" required="required" /></td>
                        <td><input type="text" name="subject" placeholder="Subject" required="required" /></td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <input type="submit" name="save" value="Save">
                        </th>
                    </tr>
                </table>
            </form>
        </div>
        <br><br><br><br><br>
</body>

</html>