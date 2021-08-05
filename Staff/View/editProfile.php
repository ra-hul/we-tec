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
    <title>Registration</title>

    <style>
        .warning {
            color: red;
        }
    </style>

</head>

<body>
    <?php include 'internalheader.php'; ?>
    <fieldset>
        <legend>
            <b>Edit Profile</b>
        </legend>
        <form action="editProfile.php" onsubmit="" method=' POST' name="reg">
            <table align="">

                <tr>
                    <td>
                        Full Name:
                    </td>
                    <td>
                        <input type="text" name='name' value="<?php echo $info['name']; ?>">
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
                        <input type="email" name='email' value="<?php echo $info['email']; ?>">
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
                        <label for="fav">Favourite Color: </label>
                    </td>
                    <td>
                        <input type="text" name='fav' value="<?php echo $info['fav']; ?>">
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
                        <input type="date" name='date' value="<?php echo $info['date']; ?>">
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
                        <input type='submit' value='Update' name="Update" formmethod="post" formaction="editProfile.php">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <br>

    <?php
    if (isset($_POST['Update'])) {
        $data = array($_POST['name'], $_POST['email'], $_POST['fav'], $_POST['date'], $_POST['gender']);
        $id = $info['uid'];

        if (updateProduct($id, $data)) {
            if (headers_sent()) {
            } else {
                exit(header("location: ../view/dashboard.php'"));
            }
        } else {
            echo "Update Failed <br>";
            print_r($data);
            return;
        }
    }


    ?>
    <?php include 'internalfooter.php'; ?>
    <script>


    </script>
</body>

</html>