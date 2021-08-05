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
    <h3 align="center">Welcome to our staff's side of the website! if you're a staff here you're in the right place. Please login if you're an existing employee or create a staff account on this if you want to become one. If you are neither a staff nor want to become one, please consider going to our <a href="../index.php">Home Page</a> instead. Thank you! </h3>
    <fieldset>
        <center>
            <form>
                <button formaction="login.php"><b>Staff Login</b></button>
                <button formaction="reg.php"><b>Staff Registration</b></button>
            </form>
        </center>
    </fieldset>
    <br>
    <?php include 'publicFooter.php'; ?>

</body>

</html>