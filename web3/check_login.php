<?php
include 'dbconnect.php';

  $email=$_REQUEST["username"];
  $pass=$_REQUEST["password"];
  
  $result=mysqli_query($con,"select * from user_register where Email='$email' and Password='$pass'");
   session_start();
  $_SESSION["userid"]=$email;
	    $redirect="Location:index.php";
		echo header($redirect);
?>