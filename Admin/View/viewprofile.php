<?php
session_start();
require_once('../Model/userModel.php');
  $connection = getConnection();
  $userlist = getAllUser();

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

<?php

    echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
    <tr>
      <td align = center><b>Name</b></td>
      <td align = center><b>Username</b></td>
      <td align = center><b>Email</b></td>
      <td align = center><b>Gender</b></td>
      <td align = center><b>DOB</b></td>
    </tr>";

    while($row = mysqli_fetch_assoc($result))
    {
      echo
      "<tr>
      <td>{$userlist[$i]['name']}</td>
      <td>{$userlist[$i]['username']}</td>
      <td>{$userlist[$i]['email']}</td>
      </tr>";
    }
    echo "</table>";

?>   
        </td>
      </tr>
    </table>

  </body>
</html>