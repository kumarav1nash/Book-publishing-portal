<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
include '../web3/dbconnect.php';

     //all parameters are recieved here
	 
	 $formid = $_REQUEST["formid"];
	
	 
	if($formid =="1"){
	   	 $Poster_Id=$_REQUEST["poster_id"];
		 $Book_Title=$_REQUEST["book_title"];
		 $Book_Writer=$_REQUEST["writer_name"];
		 $Date_Of_Publishing=$_REQUEST["date_of_publishing"];
		 $Poster_Name=$_REQUEST["poster_name"];
		 $Poster_On=$_REQUEST["posted_on"];
		 $Front_Image=$_FILES["front_image"]["name"];
		 $Back_Image=$_FILES["back_image"]["name"];
		 $Review=mysqli_real_escape_string($_REQUEST["review"]);
		 $dymen_ex=$_REQUEST["exclusive"];
		 $series=$_REQUEST["series"];
		 $edition=$_REQUEST["edition"];
		 $language=$_REQUEST["language"];
		 $publisher=$_REQUEST["publisher"];
		 $editor=$_REQUEST["editor"];
		 $chaptersNum=$_REQUEST["chapterNum"];
		 
		//front image upload coding goes here
			if ((($_FILES["front_image"]["type"]== "image/gif")
			|| ($_FILES["front_image"]["type"]== "image/jpg")
			|| ($_FILES["front_image"]["type"]== "image/png")
			|| ($_FILES["front_image"]["type"]== "image/jpeg"))
			&& (($_FILES["front_image"]["size"]/1024)<7000))

			{
				if($_FILES["front_image"]["error"]>0)
				{
				  echo "Return COde: ". $_FILES["front_image"]["error"]. "<br />";
				}
			    else
				{
			      if(file_exists("../Books/" . $_FILES["front_image"]["name"]))
				  {
			       echo $_FILES["front_image"]["name"]. "already exist. ";
			      }
			      else
				  {
			       move_uploaded_file($_FILES["front_image"]["tmp_name"],"../Books/" .$_FILES["front_image"]["name"]);
			      }
			    }
			 }
			else{
			echo "Invalid file";
			} 
          
 
		//back_image upload coding goes here
			if ((($_FILES["back_image"]["type"]== "image/gif")
			|| ($_FILES["back_image"]["type"]== "image/jpg")
			|| ($_FILES["back_image"]["type"]== "image/png")
			|| ($_FILES["back_image"]["type"]== "image/jpeg"))
			&& (($_FILES["back_image"]["size"]/1024)<7000))

			{
				if($_FILES["back_image"]["error"]>0)
				{
				  echo "Return COde: ". $_FILES["back_image"]["error"]. "<br />";
				}
			    else
				{
			      if(file_exists("../Books/" . $_FILES["back_image"]["name"]))
				  {
			       echo $_FILES["back_image"]["name"]. "already exist. ";
			      }
			      else
				  {
			       move_uploaded_file($_FILES["back_image"]["tmp_name"],"../Books/" .$_FILES["back_image"]["name"]);
			      }
			    }
			 }

			else{
			echo "Invalid file";
			}
		$query1=mysqli_query($con,"select * from free_books where Book_Name='$Book_Title'");
		if($query1==false)
		{
		  die(mysqli_error($con));
      echo "error";
		}
		$row1=mysqli_fetch_array($query1);

		if($row1)
		{
		 ?>
		 <script>
		    alert("Book already exists");
		 </script>
		 <?php
		}
		else
		{
		  $query2=mysqli_query($con,"insert into free_books
		   (DYMENSON_Exclusive, Book_Name, Writer_Name, Publishing_Date, Series, Language, Edition, Editor, Publisher, No_Of_Chapters, Book_Front_Image, Book_Back_Cover_Image,
		  Poster_Id, Poster_Name, Book_Review, Date_Of_Posting_on_Site)
		  values
		  ('$dymen_ex','$Book_Title','$Book_Writer','$Date_Of_Publishing','$series','$language','$edition','$editor','$publisher','$chaptersNum','$Front_Image','$Back_Image','$Poster_Id',
		  '$Poster_Name','$Review',now())");
		   if(!$query2)
		   {
		      die("mysqli error".mysqli_error($con));
		   }
		   else
		   {
            session_start();
          $redirect="Location:Books.php";
          echo header($redirect);
         	}
		}
		}
		else if($formid =="2")
		{
		  $bn=$_REQUEST["bookname"];
		   for($i=0;$i<count($_FILES["bookContents"]["name"]);$i++)
		   {
			 $tmpnm=$_FILES["bookContents"]["tmp_name"][$i];
			 $foldnm=$_FILES["bookContents"]["name"][$i];
			 $foldtype=$_FILES["bookContents"]["type"][$i];
			 $filepath="../Books/".$bn."/".$foldnm;
			 if (!file_exists('../Books/'.$bn))
			  {
				 mkdir('../Books/'.$bn, 0777, true);
				 move_uploaded_file($tmpnm,$filepath);
			  }
			 else
			  {
			 move_uploaded_file($tmpnm,$filepath);
			  }
		   }
		}
		?>


</body>
</html>
