<?php
session_start();

if ( isset ( $_POST [ 'submit' ] ) ) {

    $password =$_POST [ 'password' ];
    $confirm_password = $_POST [ 'renewpassword' ];

    $user = 
    [
        'password'=>$password, 
    ];

    $_SESSION['current_user2'] = $user;
    header('location:../View/viewprofile.php');
}

?>
