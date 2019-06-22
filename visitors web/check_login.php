<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title></title>
</head>

<body>
<?php
include '../web3/dbconnect.php';

   $email=$_REQUEST["Email"];
   $password=$_REQUEST["Password"];

	 $result=mysqli_query($con,"select * from admin_register where Email='$email' and Password='$password'");
	 if($row=mysqli_fetch_array($result) && $email=='admin@root.com')
	 {

	   session_start();
	   $_SESSION["userid"]=$email;
	    $redirect="Location:index.php";
		echo header($redirect);
	 }
	 else
	 {
	    echo "It seems like are lost in space";
	 }



 ?>
</body>
</html>
