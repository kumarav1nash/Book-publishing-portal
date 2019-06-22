<?php
include 'dbconnect.php';
  $email=$_REQUEST["author_email"];
  $pass=$_REQUEST["password"];
  
  $result=mysqli_query($con,"select * from author_register where Email='$email' and Password='$pass'");
   $row=mysqli_fetch_array($result);
   if($row==true)
   {
   session_start();
  $_SESSION["authorid"]=$email;
	    $redirect="Location:../visitors%20web/index.php";
		echo header($redirect);
		}
		else
		{
		  echo "invalid login";
		}
?>