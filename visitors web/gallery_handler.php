<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
   <?php 
   session_start();
   include 'dbconnect.php';
     $poster_id=$_REQUEST["poster_id"];
	 $date=$_REQUEST["date"];
	 $poster_name=$_REQUEST["poster_name"];
     $image=$_FILES["file1"]["name"];
	 $description=mysqli_real_escape_string($_REQUEST["Description"]);
	   $path="../gallery/";
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
					if(file_exists("$path".$_FILES["file1"]["name"])){
					echo $_FILES["file1"]["name"]. "already exist. ";
					}
					else
					{
					$z=move_uploaded_file($_FILES["file1"]["tmp_name"],"$path".$_FILES["file1"]["name"]);
					if(!$z)
					{
					  echo mysqli_error($con);
					}
					}
				}
			}
			
			else{
			echo "Invalid file";
			}
			//path selection
			
			$path1= "../gallery/".$image;
			$path2= "../gallery1/".$image;
			//$path3= "C:/wamp/www/web3/gallery/".$image;
			//$path4= "C:/wamp/www/web3/gallery1/".$image;
			// for resize the image
			//for jpg file
			
			//copy($path1, $path3);
			
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
		   $img = resize_imagegif($path1, 260, 260);
		}
		else if(($_FILES["file1"]["type"]== "image/jpg")||($_FILES["file1"]["type"]== "image/jpeg"))
		{
		   $img = resize_imagejpg($path1, 260, 260);
		}
		else if($_FILES["file1"]["type"]== "image/png")
		{
		   $img = resize_imagepng($path1, 260, 260);
		}
		else
		{
		  echo mysqli_error($con);
		}
		
		imagejpeg($img, $path2);
		//imagejpeg($img, $path4);
		
$val = mysqli_query($con,"select 1 from Gallery");
if($val !== FALSE)
{
   
	if ((!empty($image)))
	{	
		$query=mysqli_query($con,"INSERT INTO Gallery (Poster_id, Poster_Name, Date, Image, description)
		VALUES ('$poster_id','$poster_name', '$date', '$image','$description')");
	
		if($query)
		{
		   $redirect="Location:gallery.php";
		   echo header($redirect);
		}
		else
		{
		   echo "mysqli error".mysqli_error($con);
		}
		
    }
}    

   ?>
   
</body>
</html>
