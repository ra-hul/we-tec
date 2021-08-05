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
    <fieldset>
        <legend>Contact Admin</legend>
        <form action='./contactadmin.php' method='POST'>
            <table align="">
                <tr>
                    <td>
                        Subject:
                    </td>
                    <td>
                        <input id="sub" type="text" name='sub' value="<?php
                                                                        $s = $_COOKIE['sub'] ?? "";
                                                                        echo $s; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date:
                    </td>
                    <td>
                        <input type="date" name='date'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Message Body:
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea id="msg" name="msg" rows="4" cols="50"> <?php
                                                                            $m = $_COOKIE['msg'] ?? "";
                                                                            echo $m; ?> </textarea>
                    </td>
                </tr>
                <tr>
                </tr>

                <tr>
                    <td>
                        <input type='submit' name="send" value='Send'><button type="button" onclick="document.getElementById('sub').value = ''">Clear Subject</button> <button type="button" onclick="document.getElementById('msg').value = ''">Clear Message</button>

                    </td>
                </tr>
            </table>
        </form>
    </fieldset>

    <br>
    <?php include 'internalfooter.php'; ?>
    <?php

    if (isset($_POST['send'])) {
        $_SESSION['sub'] = $_POST['sub'];
        $_SESSION['msg'] = $_POST['msg'];

        $sub = $_SESSION['sub'];
        $msg = $_SESSION['msg'];

        setcookie('sub', $sub, time() + (86400 * 7));
        setcookie('msg', $msg, time() + (86400 * 7));


        //$_COOKIE['sub'] = $sub;
        //$_COOKIE['msg'] = $msg;

        if (strlen(str_replace(' ', '', $sub)) < 3) {
            echo "<mark>  Subject needs to  consist of atleast 10 characters<mark/>";
            return;
        }

        if (strlen(str_replace(' ', '', $msg)) < 5) {
            echo "<mark>  Message Body needs to  consist of atleast 50 characters<mark/>";
            return;
        }
        echo "<mark>  Successfully Sent<mark/>";
    }
    /*
    if (!empty($_POST['retrieve'])) {
        setcookie('sub', $sub, time() + (86400 * 7)); // 86400 = 1 day
        setcookie('msg', $msg, time() + (86400 * 7));
    } else {
        if (isset($_COOKIE['sub'])) {
            setcookie('sub', '');
        }
        if (isset($_COOKIE['msg'])) {
            setcookie('msg', '');
        }
    }
    
    if (isset($_GET['retrieve'])) {
        $sub = $_SESSION['sub'];
        $msg = $_SESSION['msg'];
    } else {
        if (isset($_COOKIE['sub'])) {
            setcookie('sub', '');
        }
        if (isset($_COOKIE['msg'])) {
            setcookie('msg', '');
        }
    }
    */




    ?>
</body>

</html>