<?php
session_start();
require_once('../Model/feedbackmodel.php');
  $connection = getConnection();
  $stocklist = getallstock();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Feedback
    </title>
</head>
<body background="../Asset/bg.jpg">
        <div class="main" id="home">
            <br />
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="home.html">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>

<?php

    echo "<center><hr/><h2>Reported Issues</h2><hr/></center>";
      echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
      <tr>
          <td align = center><b>Username</b></td>
          <td align = center><b>User Type</b></td>
          <td align = center><b>Priority</b></td>
          <td align = center><b>Comments</b></td>
          <td align = center><b>Progress</b></td>
          <td align = center><b>Actions</b></td>
      </tr>";

      for($i = 0; $i<count($stocklist); $i++){
            echo "<tr>
                    <td>{$stocklist[$i]['Username']}</td>
                    <td>{$stocklist[$i]['User Type']}</td>
                    <td>{$stocklist[$i]['Priority']}</td>
                    <td>{$stocklist[$i]['Comments']}</td>
                    <td>{$stocklist[$i]['progress']}</td>
                    <td> <a href='editfeedback.php?id={$stocklist[$i]['id']}'> Edit</a> </td>
                </tr>";
      }
      echo "</table"
?>
</body>
</html>