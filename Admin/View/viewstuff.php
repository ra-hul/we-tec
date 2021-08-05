<?php
session_start();
require_once('../Model/usermodel.php');
  $connection = getConnection();
  $stufflist = getAllstuff();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    Stuff
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
      <td align = center><b>Password</b></td>
      <td align = center><b>Authorized By Admin</b></td>
      <td align = center><b>Actions</b></td>
    </tr>";

    for($i = 0; $i<count($stufflist); $i++)
    {
      echo
      "<tr>
      <td>{$stufflist[$i]['name']}</td>
      <td>{$stufflist[$i]['username']}</td>
      <td>{$stufflist[$i]['email']}</td>
      <td>{$stufflist[$i]['password']}</td>
      <td>{$stufflist[$i]['displayable']}</td>
      <td> <a href='editstuff.php?id={$stufflist[$i]['id']}'> Edit</a> | <a href='deletestuff.php?id={$stufflist[$i]['id']}'> Delete </a> </td>
      </tr>";
    }
    echo "</table>";

?>   
        </td>
      </tr>
    </table>

  </body>
</html>