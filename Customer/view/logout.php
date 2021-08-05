<?php
session_start();
unset($_SESSION['flag']);
header('location: ../../Staff/view/logout.php');
