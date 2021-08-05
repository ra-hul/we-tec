<?php
    $title = "Inventory Page";
    require_once('../Model/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Inventory
    </title>
</head>
<body background="../Asset/bg.jpg">
        <div class="main" id="home">
            <br />
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="home.html">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="home.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>
    </body>
</html>

<?php

    echo "<center><hr/><h2>User Feedback</h2><hr/></center>";

      $sql = "select * from feedback";
      $conn = getConnection();
      $result = mysqli_query($conn, $sql);

      echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
      <tr>
          <td align = center><b>User Name</b></td>
          <td align = center><b>Comments</b></td>
      </tr>";

      while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td align = center>{$row['username']}</td>
                    <td align = center>{$row['Comments']}</td>
                </tr>";
      }
?>