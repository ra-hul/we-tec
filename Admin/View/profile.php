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
    profile
  </title>
</head>
<body background="../Asset/bg.jpg">
    <div>
      <br />
      <h3 align="center">
        <font face="sans" size="4">
          <a href="home.html">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </font>
      </h3>
    </div>
      <tr>
        <td height="150px" weight="150px">
            <b>Profile</b>
            <hr>
            <td><h1>Welcome <?php echo $_SESSION['username']; ?>,</h1></td>
                <ul>
                    <li><a href="viewprofile2.php">View Own Profile</a></li>
                    <li><a href="profilepic.php">Change Profile Picture</a></li>
                    <li><a href="changepass.php">Change Password</a></li>
                </ul>

        </td>
      </tr>
  </body>
</html>


<?php

    }else{
        header('location: Login.php');
    }

?>