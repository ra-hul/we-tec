<?php
session_start();
require_once('../Model/usermodel.php');

if ( isset ( $_POST [ 'submit' ] ) )
{
    $username =  $_POST [ 'username' ]   ;
    $password =   $_POST [ 'password' ]  ;
    
    if ($username == "" && $password == "")
    {
      echo "Null Input.";
    }
    else
    {
    $status = validateUser($username, $password);
    if ($status)
    {
      if(!empty($_POST['remember']))
      {
          setcookie('username', $username, time()+(86400 * 30)); // 86400 = 1 day
          setcookie('password', $password, time()+(86400 * 30));
      }
            else
            {
              if(isset($_COOKIE['username']))
              {
                setcookie('username','');
              }
              if(isset($_COOKIE['password']))
              {
                setcookie('password','');
              }
            }

            $_SESSION["flag"] = true;
            $_SESSION['username'] = $username;
            header('location:../View/home.html');
          }
          else
          {
            echo "Invalid User";
          }
    }
}

?>
