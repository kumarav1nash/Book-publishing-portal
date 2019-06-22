<!DOCTYPE HTML >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
include '../web3/dbconnect.php';

   $mobile_no=$_REQUEST["Mobile_No"];
   $date=$_REQUEST["Date"];
   $subject=$_REQUEST["Subject"];
   $title=mysqli_real_escape_string($_REQUEST["Title"]);
   $post_by=$_REQUEST["post_by"];
   $image=$_FILES["file1"]["name"];
   $description=mysqli_real_escape_string($_REQUEST["description"]);


		    if ((($_FILES["file1"]["type"]== "image/gif")
			|| ($_FILES["file1"]["type"]== "image/jpg")
			|| ($_FILES["file1"]["type"]== "image/png")
			|| ($_FILES["file1"]["type"]== "image/jpeg"))
			&& (($_FILES["file1"]["size"]/1024)<7000))

			{
			if($_FILES["file1"]["error"]>0){
			echo "Return COde: ". $_FILES["file1"]["error"]. "<br />";
			}
			else{
			if(file_exists("../upload/" . $_FILES["file1"]["name"])){
			echo $_FILES["file1"]["name"]. "already exist. ";
			}
			else{
			move_uploaded_file($_FILES["file1"]["tmp_name"],"../upload/" .$_FILES["file1"]["name"]);
			}
			}
			}

			else{
			echo "Invalid file";
			}

     
	  $result=mysqli_query($con,"insert into blog_posts (Post_Subject, Post_Title, Post_Image, Date, Post_By, Post_Description, Poster_Id) value('$subject','$title','$image','$date','$post_by','$description','$mobile_no')");
	 if (!$result)
	  {
		die('Invalid query: '.mysqli_error($con));
	  }
	  else
	  {
	     session_start();
		 $redirect="Location:Blogs.php";
		 echo header($redirect);
	  }

?>
</body>
</html>
