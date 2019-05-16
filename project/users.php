<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: log_in.php"); 
    exit; 
} 
echo 'Welcome you are logged in as , '.$_SESSION['UNAME'];
echo '<br>';
echo 'your email is: '.$_SESSION['UEMAIL'] 
?> 