<?php
$title = "Update Information";
include('header.php');
require_once('../model/db.php');
require_once('../model/userModel.php');
$info = getUserByName($_SESSION['username']);
?>
<td>
    <fieldset>
        <legend><b>Update Information</b></legend>
        <form action='../controller/upadateinfocheck.php' method='post'>
            <table width='100%'>


                <tr>
                    <td>
                        User ID:
                    </td>
                    <td>
                        <input type="text" name='abc' value=" <?php echo $info['uid'] ?>">
                    </td>
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
                        <input type="text" name='name' value=" <?php echo $info['name'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name='Username' value="<?php echo $info['username'] ?>">
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
                        <input type="email" name='email' value="<?php echo $info['email'] ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <td>Gender:</td>
                <td>
                    <input type="text" name='Gender' value="<?php echo $info['gender'] ?>">
                </td>
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
                        <input type='submit' value='Submit'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>