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
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>
    </body>
</html>

<?php

    echo "<center><hr/><h2>Inventory</h2><hr/></center>";

      $sql = "select * from products";
      $conn = getConnection();
      $result = mysqli_query($conn, $sql);

      echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
      <tr>
          <td align = center><b>Product Name</b></td>
          <td align = center><b>Type</b></td>
          <td align = center><b>Manufacturer</b></td>
          <td align = center><b>Stock</b></td>
          <td align = center><b>Price</b></td>
      </tr>";

      while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td align = center>{$row['p_name']}</td>
                    <td align = center>{$row['p_type']}</td>
                    <td align = center>{$row['manufacturer']}</td>
                    <td align = center>{$row['stock']}</td>
                    <td align = center>{$row['mrp']}</td>
                </tr>";
      }
?>