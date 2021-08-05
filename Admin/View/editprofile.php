<?php
  session_start();
  require_once('../Model/db.php');
  require_once('../Model/usermodel.php');
  $id = $_GET['id'];
  $connection = getConnection();
  $userr = getuserbyid($id);
  $_SESSION['id'] = $id;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    index
  </title>
  <script type="text/javascript" src="../Js/editprofileScript.js"></script>
    <link rel="stylesheet" type="text/css" href="../Css/styles.css">
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
                <legend>EDIT PROFILE</legend>
            <form method="post"  action="../Controller/editprofilevalidation.php" onsubmit="return editCheckValidation()" >
               <table>
               <tr>
                <td>Name:</td> 
                <td><input type="text" name="name" id="name" value="<?php echo $userr['name'] ?>"></td>
               </tr>
               <tr>
                <td>
                  <span id="n" class="user-error"></span><hr>
                </td>
              </tr>
               <tr>
                <td>Email:</td> 
                <td><input type="email" name="email" id="email" value="<?php echo $userr['email'] ?>"></td>
               </tr>
               <tr>
                <td>
                  <span id="e" class="user-error"></span><hr>
                </td>
              </tr>
               <tr>
                <td>User Name:</td> 
                <td><input type="text" name="username" id="username" value="<?php echo $userr['username'] ?>"></td>
               </tr>
               <tr>
                <td>
                  <span id="un" class="user-error"></span><hr>
                </td>
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