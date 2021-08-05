<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>
    index
  </title>
</head>
<body background="images/bg.jpg">
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
                <legend>PROFILE</legend>
            <form class="" action="" method="post">
               <table>
                <tr>
                <td>Current Password</td> 
                <td>:<?php $user = $_SESSION['current_user']; $password= $user['password']; echo "$password"; ?></td>
              </tr>
                <tr>
                <td>New Password</td> 
                <td>:<?php $user = $_SESSION['current_user2']; $password= $user['password']; echo "$password"; ?></td>
              </tr>
             </table>
           </form>
         </fieldset>
       </td>
     </body>
     </html>


<?php

  }else{
    header('location:Login.html');
  }

?>