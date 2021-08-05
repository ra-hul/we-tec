<?php
	session_start();
  require_once('../Model/usermodel.php');
  require_once('../model/db.php');
	if(!isset($_SESSION['flag']))
	{
    header('location: logincheck.php');
  }
  $username=$_SESSION['username'];

  if(isset($_POST['change_pass_btn'])){

    $curr_pass = $_POST['curr_pass'];
    $new_pass = $_POST['new_pass'];
    $re_pass = $_POST['re_pass'];

    if($user = array('password'=>$curr_pass)){
      if($new_pass==$re_pass){

        $conn=getConnection();
        $sql="update registration set password='{$new_pass}' where username ='{$username}'";
        $result=mysqli_query($conn, $sql);
        
        if($result){
          ?>
            <script type="text/javascript">
              alert('Successfully change password');
            </script>
          <?php
        }
      }
    }
  }
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
        <table align="center">
          <tr>
            <td>
              <form method="post" action="changepass.php" onsubmit="return validation()">
                <fieldset>
                  <legend>CHANGE PASSWORD</legend>
                  <table>
                    <tr>
                      <td>Current Password</td>
                      <td>
                        <input type="password" name="curr_pass" id="curr_pass" value="">
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <span id="cp" class="user-error"></span>
                      </td>
                    </tr>

                    <tr>
                      <td>New Password</td>
                      <td>
                        <input type="password" name="new_pass" id="new_pass" value="">
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <span id="np" class="user-error"></span>
                      </td>
                    </tr>

                    <tr>
                      <td>Retype New Password</td>
                      <td>
                        <input type="password" name="re_pass" id="re_pass" value="">
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <span id="rp" class="user-error"></span>
                      </td>
                    </tr>

                  </table>
                  <hr>
                  <input type="submit" name="change_pass_btn" value="Save">
                </fieldset>
              </form>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </body>
</html>

<script>
        
    function validation(){

      var curr_pass = document.getElementById('curr_pass').value;
      var new_pass = document.getElementById('new_pass').value;
      var re_pass = document.getElementById('re_pass').value;
      if(curr_pass==""){
        document.getElementById('cp').innerHTML = "*Please fill the curr_pass field ?";
        return false;

      }

      if(new_pass==""){
        document.getElementById('np').innerHTML = "*Please fill the new_pass field ?";
        return false;
      }

      if(new_pass.length<=7 || new_pass.length>20){
        document.getElementById('np').innerHTML = "*Password length must be btween 8 to 20 ?";
        return false;
      }
      if(re_pass==""){
        document.getElementById('rp').innerHTML = "*Please fill the re_pass field ?";
        return false;
      }

      if(new_pass!=re_pass){
        document.getElementById('rp').innerHTML = "*New pass & re pass mismatch ?";
        return false;
      }
    }

  </script>