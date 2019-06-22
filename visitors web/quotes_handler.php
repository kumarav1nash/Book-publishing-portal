<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
include '../web3/dbconnect.php';

$poster_name=$_REQUEST["poster_name"];
$poster_id=$_REQUEST["poster_id"];
$date=$_REQUEST["date"];
$resource_type=$_REQUEST["resource_type"];
$resource_name=mysqli_real_escape_string($_REQUEST["resource_name"]);  
$quotes=mysqli_real_escape_string($_REQUEST["quotes"]);

$val = mysqli_query($con,"select 1 from Quotes");
if($val !== FALSE)
{
   
	if ((!empty($quotes)))
	{	
		$query=mysqli_query($con,"INSERT INTO Quotes (Poster_id, Poster_Name, Date, Resource_Type, Resource_Name, Quotes)
		VALUES ('$poster_id','$poster_name', '$date', '$resource_type','$resource_name','$quotes')");
	
		if($query)
		{
		   $redirect="Location:Quotes.php";
		   echo header($redirect);
		}
		else
		{
		   echo "mysqli error".mysqli_error();
		}
		
    }
}    


?>
</body>
</html>
