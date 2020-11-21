<?php

session_start();

$userName=$_POST['userName'];
$email=$_POST['email'];
$password=$_POST['password'];


$_SESSION['userName']=$userName;
$_SESSION['email']=$email;
$_SESSION['password']=$password;


header('location: index.php'); 

?>

