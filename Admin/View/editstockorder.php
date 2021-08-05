<?php
  session_start();
  require_once('../Model/db.php');
  require_once('../Model/stockmodel.php');
  $id = $_GET['id'];
  $connection = getConnection();
  $stockk = getstockbyid($id);
  $_SESSION['id'] = $id;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    index
  </title>
</head>
<body background="../Asset/bg.jpg" >
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
                <legend>Edit Ordered Stock</legend>
            <form class="" action="../Controller/editstockordervalidation.php" method="post">
               <table>
               <tr>
                <td>Name</td> 
                <td>:<input type="text" name="name" value="<?php echo $stockk['name'] ?>" required="required"></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Email</td> 
                <td>:<input type="email" name="email" value="<?php echo $stockk['email'] ?>" required="required"></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Quantity</td> 
                <td>:<input type="text" name="amount" value="<?php echo $stockk['amount'] ?>" required="required"></td>
               </tr>
               <tr><td><hr></td></tr>
               <tr>
                <td>Payment Amount</td> 
                <td>:<input type="text" name="payment" value="<?php echo $stockk['payment'] ?>" required="required"></td>
               </tr>
        <tr>
          <td>
            <input type="checkbox" name="check" <?php if($stockk['displayable'] == 'Yes') { echo "checked";} ?>  > Authorized by Admin
          </td>
        </tr>
        <tr><td><hr></td></tr>
               </table>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </form>
            </fieldset>
        </td>
      </tr>
    </table>

  </body>
</html>