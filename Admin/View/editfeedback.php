<?php
  session_start();
  require_once('../Model/db.php');
  require_once('../Model/feedbackmodel.php');
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
          <a href="feedback.php">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="home.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
        </font>
      </h3>
    </div>

    <td>
          <fieldset>
                <legend>Edit Feedback</legend>
            <form method="post" action="../Controller/editfeedbackvalidation.php">
               <table>
               <tr>
                <td>Progress:</td> 
                <td><input type="text" name="progress" value="<?php echo $stockk['progress'] ?>" required="required"></td>
               </tr>
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