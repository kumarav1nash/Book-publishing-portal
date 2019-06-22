 <?php 
 if(isset($_SESSION["userid"]))
  {
    $eml=$_SESSION["userid"];
	$result2=mysqli_query($con,"select * from user_register where email='$eml'");
	$row2=mysqli_fetch_array($result2);
  }
  ?>