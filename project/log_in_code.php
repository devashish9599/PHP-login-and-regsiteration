<?php
session_start();  
 if (isset($_POST['submit'])) {
require 'db_info.php';
if (!$con) {
die("Connection failed: " . mysqli_connect_error());}
$email = mysqli_real_escape_string($con, $_POST['email']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$sql = "SELECT * FROM details
WHERE email='".$email."'";
$result = mysqli_query($con,$sql);
if ($result) {
	$row=mysqli_fetch_array($result);
	$n=$row['name'];
	$_SESSION['UNAME']=$n;
	$_SESSION['UEMAIL']=$email;
	$_SESSION['logged']=1;
	echo 'success';
	header('location: ../project/users.php',TRUE);
}}?>
