<?php
session_start();
require_once('../Model/stockmodel.php');
  $connection = getConnection();
  $stocklist = getallstock();

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
          <a href="stock.php">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
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
      <td align = center><b>Email</b></td>
      <td align = center><b>Quantity</b></td>
      <td align = center><b>Payment Amount</b></td>
      <td align = center><b>Authorized By Admin</b></td>
      <td align = center><b>Actions</b></td>
    </tr>";

    for($i = 0; $i<count($stocklist); $i++)
    {
      echo
      "<tr>
      <td>{$stocklist[$i]['name']}</td>
      <td>{$stocklist[$i]['email']}</td>
      <td>{$stocklist[$i]['amount']}</td>
      <td>{$stocklist[$i]['payment']}</td>
      <td>{$stocklist[$i]['displayable']}</td>
      <td> <a href='editstockorder.php?id={$stocklist[$i]['id']}'> Edit</a> | <a href='deletestockorder.php?id={$stocklist[$i]['id']}'> Delete </a> </td>
      </tr>";
    }
    echo "</table>";

?>   
        </td>
      </tr>
    </table>

  </body>
</html>