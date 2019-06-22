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
 $name=$_REQUEST["name"];
 $p_name=$_REQUEST["Professionalname"];
 $phone_no=$_REQUEST["PhoneNO"];
 $address=mysqli_real_escape_string($_REQUEST["address"]);
 $profession=$_REQUEST["profession"];
 $clg_nm=mysqli_real_escape_string($_REQUEST["collegename"]);
 $cmp_nm=mysqli_real_escape_string($_REQUEST["companyname"]);
 $crse_nm=$_REQUEST["CourseName"];
 $dob=$_REQUEST["dob"];
 $dateofbirth = str_replace('/', '-', $dob);
 $b_date=date('Y-m-d', strtotime($dateofbirth));
 $age=$_REQUEST["age"];
 $crnt_date=$_REQUEST["curdate"];
 $sex=$_REQUEST["sex"];
 $pass=$_REQUEST["passwd"];
 $profile_pic=$_FILES["file1"]["name"];


		 $result=mysqli_query($con,"select * from $tbl_nm where Email='$email'");
		 $row=mysqli_fetch_array($result);
		 if($row)
		 {
		  echo "account already exists";
		 }
		 else
		 {
		    if ((($_FILES["file1"]["type"]== "image/gif")
			|| ($_FILES["file1"]["type"]== "image/jpg")
			|| ($_FILES["file1"]["type"]== "image/png")
			|| ($_FILES["file1"]["type"]== "image/jpeg"))
			&& (($_FILES["file1"]["size"]/1024)<7000))

			{
				if($_FILES["file1"]["error"]>0)
				{
				  echo "Return COde: ". $_FILES["file1"]["error"]. "<br />";
				}
			    else
				{ 
			       move_uploaded_file($_FILES["file1"]["tmp_name"],"../AuthorProfilePic/" .$_FILES["file1"]["name"]);
			    }
			 }

			else{
			echo "Invalid file";
			} 
			//for resizing the image
			$path1= "../AuthorProfilePic/".$profile_pic;
			$path2= "../AuthorProfilePic1/".$profile_pic;
			 function resize_imagejpg($file, $w, $h)
			 {
			   list($width, $height) = getimagesize($file);
			   $src = imagecreatefromjpeg($file);
			   $dst = imagecreatetruecolor($w, $h);
			   imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
			   return $dst;
			}
			//for png file
			function resize_imagepng($file, $w, $h)
		   {
			   list($width, $height) = getimagesize($file);
			   $src = imagecreatefrompng($file);
			   $dst = imagecreatetruecolor($w, $h);
			   imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
			   return $dst;
			}
			//for gif file
			
			function resize_imagegif($file, $w, $h)
		   {
			   list($width, $height) = getimagesize($file);
			   $src = imagecreatefromgif($file);
			   $dst = imagecreatetruecolor($w, $h);
			   imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);
			   return $dst;
			}
		if($_FILES["file1"]["type"]== "image/gif")
		{
		   $img = resize_imagegif($path1, 180, 180);
		}
		else if(($_FILES["file1"]["type"]== "image/jpg")||($_FILES["file1"]["type"]== "image/jpeg"))
		{
		   $img = resize_imagejpg($path1, 180, 180);
		}
		else if($_FILES["file1"]["type"]== "image/png")
		{
		   $img = resize_imagepng($path1, 180, 180);
		}
		else
		{
		  echo mysqli_error($con);
		}
		
		imagejpeg($img, $path2);
		
		    $result=mysqli_query("insert into $tbl_nm (Email, Name, Professional_Name, Password, Contact_No, Address, Profession, College_Name, Company_name, Course, Date_of_Birth, Age, Sex, Author_Profile_Pic, date_of_registration)
			 values ('$email','$name','$p_name','$pass','$phone_no','$address','$profession','$clg_nm','$cmp_nm','$crse_nm','$b_date','$age','$sex','$profile_pic','$crnt_date')");
			 if($result==false)
			 {
			  echo mysqli_error($con);
			 }
			     session_start();
				 $redirect="Location:author_login.php";
				 echo header($redirect);
		 }
		 
 
?>
</body>
</html>
