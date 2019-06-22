<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
 <?php
 include 'dbconnect.php';
  $email=$_REQUEST["email"];
  $first_name=$_REQUEST["firstname"];
  $last_name=$_REQUEST["lastname"];
  $pass=$_REQUEST["passwd"];
  $pass_confirm=$_REQUEST["passwd1"];
  $image=$_FILES["file1"]["name"];
  $date= date("Y-m-d");
  
      if($pass==$pass_confirm)
	   {
		  
   
   
					if ((($_FILES["file1"]["type"]== "image/gif") 
					|| ($_FILES["file1"]["type"]== "image/jpg") 
					|| ($_FILES["file1"]["type"]== "image/png") 
					|| ($_FILES["file1"]["type"]== "image/jpeg")) 
					&& (($_FILES["file1"]["size"]/1024)<7000))
					
					{
					if($_FILES["file1"]["error"]>0){
					echo "Return COde: ". $_FILES["file1"]["error"]. "<br />";
					}
					else
					{
						if(file_exists("userProfilePic/" . $_FILES["file1"]["name"])){
						echo $_FILES["file1"]["name"]. "already exist. ";
					}
					else
					{
					  move_uploaded_file($_FILES["file1"]["tmp_name"],"userProfilePic/" .$_FILES["file1"]["name"]);
					}
					}
					}
					
					else
					{
					   echo "Invalid file";
					}
				
				 $result= mysql_query($con,"insert into user_register (First_Name, Last_Name, Email, Password, Profile_image, Date) values ('$first_name','$last_name','$email','$pass','$image','$date')");
				 if(!$result)
				 {
				   die(mysql_error($con)); 
				 }
				 session_start();
				 $redirect="Location:login.php";
				 echo header($redirect);
		 
	   }
	   else
	   {
	      ?>
		<script language="javascript"> alert("Passowrd doesn't match");</script>
		<?php
	   }
   
 ?>
 
	 
</body>
</html>
