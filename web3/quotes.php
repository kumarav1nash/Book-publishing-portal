  <?php
session_start(); 
include 'dbconnect.php';
include 'check_user_login_status.php';

?>
<?php include 'header.php';?>
        <!-- //navbar ends here -->
		<!-- banner -->
       <div class="banner-bg-inner">
			<!-- banner-text -->
			<div class="banner-text-inner">
				<div class="container">
					<h2 class="title-inner">
						world of reading
					</h2>

				</div>
			</div>
			<!-- //banner-text -->
		</div>
		<!-- //banner -->
       
	   <div id="quotes_content">
	       <div class="container">
						<h4 class="rad-txt">
						  <span class="abtxt1"></span>
						  <span class="abtext">Top Quotes </span>
						</h4>
			           <div id="quotes_blocks">
		  <?php
			$result1=mysqli_query($con,"select * from quotes ORDER BY ID DESC");
			while($row1=mysqli_fetch_array($result1))
			{
		  ?>
						  <div id="q_block" >
 					      		<div id="q_head">
							   		<div id="poster">
							      			<div id="poster_img">
									  <?php
									     $email= $row1["Poster_Id"];
									    $result=mysqli_query($con,"select * from admin_register where Email='$email'");
					                    $row=mysqli_fetch_array($result);
										 $icon="../admin/".$row["Profile_Image"].".jpg";
									  ?>
									           <img src="<?php echo $icon; ?>" alt="">
								            </div>
										    <div id="poster_name">
											   <?php echo $row1["Poster_Name"];?>
										    </div>
							         </div>
							         <div id="q_date">
							            <?php 
										  $date=strtotime($row1["Date"]);
											echo date("M d, Y",$date);
											 
										?>
							         </div>    
						        </div>
						        <div id="q_block_content">
					     <?php
						   echo nl2br($row1["Quotes"]."<br>"." <b>-".$row1["Resource_Name"]."</b>");
						 ?>
						         </div>
						 
					      </div><br><br>
				  <?php
				     }
				  ?>
			   </div>
		 </div>
	   </div>
	 <?php  include 'footer.php';?>


    