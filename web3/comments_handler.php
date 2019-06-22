<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>comment hander</title>
</head>

<body>
<?php 
include 'dbconnect.php';
$p=$_POST['postid'];
$n=$_POST['name'];
$c=mysqli_real_escape_string($_POST['comment']);
$table= $_POST['webpage'];
$d= date("l M d, Y");
if($n == 'Name')
{
  $n="UNKNOWN";
}

$val = mysqli_query($con,"select 1 from $table");

if($val !== FALSE)
{
   
	if ((!empty($n)) && (!empty($c)))
	{
		mysqli_query($con,"INSERT INTO $table (post_id, name, date, comments)
		VALUES ('$p','$n', '$d', '$c')");
	}
    ?>
	<div id="quotes_blocks">
							  <?php
								$result=mysqli_query($con,"select * from $table where post_id='$p' ORDER BY ID DESC");
								while($row=mysqli_fetch_array($result))
								{
								     $n= $row['name'];
									 $d= $row['date'];
									 $c= $row['comments'];
									 //$email= $row1["Poster_Id"];
									 $result=mysqli_query($con,"select * from admin_register where Email='admin@root.com'");
									 $row=mysqli_fetch_array($result);
									 $icon="../images/default_pic.png";
											  
							  ?>
						  <div id="q_block" >
 					      		<div id="q_head">
							   		<div id="poster">
							      			<div id="poster_img">
									           <img src="<?php echo $icon; ?>" alt="">
								            </div>
										    <div id="poster_name">
											   <?php echo $n;?>
										    </div>
							         </div>
							         <div id="q_date">
							            <?php 
										  $date=strtotime($d);
											echo date("M d, Y",$date); 
										?>
							         </div>    
						        </div>
						        <div id="q_block_content">
					     <?php
						   echo nl2br($c."<br>");
						 ?>
						         </div>
						 
					      </div><br>
				  <?php
				     }
				  ?>
			   </div>
    <?php
}


else
{
	$createtable= "CREATE TABLE $table
	( ".
	"ID INT NOT NULL AUTO_INCREMENT, ".
	"post_id VARCHAR(100) NOT NULL, ".
	"name VARCHAR(100) NOT NULL, ".
	"date VARCHAR(50) NOT NULL, ".
	"comments VARCHAR(60000) NOT NULL, ".
	"PRIMARY KEY (ID)
	);
	";

$create= mysqli_query($createtable, $con);


if ($create)
{

	if ((!empty($n)) && (!empty($c)))
	{
	mysqli_query($con,"INSERT INTO $table (post_id, name, date, comments)
	VALUES ('$p','$n', '$d', '$c')");
	}
	?>
	<div id="quotes_blocks">
							  <?php
								$result=mysqli_query($con,"select * from $table where post_id='$p' ORDER BY ID DESC");
								while($row=mysqli_fetch_array($result))
								{
								     $n= $row['name'];
									 $d= $row['date'];
									 $c= $row['comments'];
									 //$email= $row1["Poster_Id"];
									 $result=mysqli_query($con,"select * from admin_register where Email='admin@root.com'");
									 $row=mysqli_fetch_array($result);
									 $icon="../admin/".$row["Image"].".jpg";
											  
							  ?>
						  <div id="q_block" >
 					      		<div id="q_head">
							   		<div id="poster">
							      			<div id="poster_img">
									           <img src="<?php echo $icon; ?>" alt="">
								            </div>
										    <div id="poster_name">
											   <?php echo $n;?>
										    </div>
							         </div>
							         <div id="q_date">
							            <?php 
										  $date=strtotime($d);
											echo date("M d, Y",$date); 
										?>
							         </div>    
						        </div>
						        <div id="q_block_content">
					     <?php
						   echo nl2br($c."<br>");
						 ?>
						         </div>
						 
					      </div><br>
				  <?php
				     }
				  ?>
			   </div>
    <?php
    }
}
?>
</body>
</html>
