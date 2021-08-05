<?php
session_start();
unset($_SESSION['flag1']);
header('location: ../../Staff/view/logout.php');
?>