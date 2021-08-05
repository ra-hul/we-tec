<?php
session_start();
echo "UserName:";
echo $_COOKIE['name'] ?? "";
#echo  $_COOKIE['name'] ;
echo "Password:";
#echo  $_COOKIE['Password'];
echo $_COOKIE['Password'] ?? "";

?>
