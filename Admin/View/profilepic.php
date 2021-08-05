<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    index
  </title>
</head>
<body background="../Asset/bg.jpg">
    <div>
      <br />
      <h3 align="center">
        <font face="sans" size="4">
          <a href="profile.php">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </font>
      </h3>
    </div>

    <td>
            <fieldset>
                <form class="" action="" method="post">
                    <fieldset>
                      <legend>PROFILE PICTURE</legend>
                      <img height="100 px" width="100 px" src="../Asset/user.png"><br>
                      <input type="file" id="photo" name="photo"><br>
                      <hr>
                      <input type="submit" name="submit" value="submit">
                    </fieldset>
              
                  </form>
            </fieldset>
        </td>
      </tr>
  </body>
</html>

<?php

  }else{
    header('location: Login.php');
  }

?>
