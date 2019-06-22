<?php
session_start();
include 'dbconnect.php';
include 'check_user_login_status.php';
?>
<?php include 'header.php'; ?>
		<div id="main-content">
	     	<section class="wrapper">
				<div class="gallery">
					 <h4 class="rad-txt">
                      <span class="abtxt1"></span>
                      <span class="abtext">Gallery</span>
                     </h4>
						<div class="gallery-grids">
    					<div class="gallery-top-grids">
		<!--fetching from db-->
		<?php

						   
		                  $result1=mysqli_query($con,"select * from Gallery  ORDER BY ID DESC");
						   $c=0;
						   while($row1=mysqli_fetch_array($result1))
						   {
						     $c++;
							 if($c==1)
							 {
		?>
		<!--//fetching from db-->

		<?php
							     $icon="../gallery/".$row1["Image"];
								 $icon1="../gallery1/".$row1["Image"];
					?>
    					<div class="col-sm-4 gallery-grids-left">
    						<div class="gallery-grid">
    							<a class="example-image-link" href="<?php echo $icon; ?>" data-lightbox="example-set" data-title="<?php echo $row1["Description"]; ?>">
    								<div id="gal-img"><img src="<?php echo $icon1; ?>" alt="" /></div>
    								<div class="captn">
    									<h4><?php echo $row1["Poster_Name"]; ?></h4>
    									<p><?php echo $row1["Date"]; ?></p>
    								</div>
    							</a>
    						</div>
    					</div>
						<?php
							}
							else if($c==2)
							{
					?>

					<?php
							     $icon="../gallery/".$row1["Image"];
								  $icon1="../gallery1/".$row1["Image"];
					?>
    					<div class="col-sm-4 gallery-grids-left">
    						<div class="gallery-grid">
    							<a class="example-image-link" href="<?php echo $icon; ?>" data-lightbox="example-set" data-title="<?php echo $row1["Description"]; ?>">
    								<div id="gal-img"><img src="<?php echo $icon1; ?>" alt="" /></div>
    								<div class="captn">
    									<h4><?php echo $row1["Poster_Name"]; ?></h4>
    									<p><?php echo $row1["Date"]; ?></p>
    								</div>
    							</a>
    						</div>
    					</div>
						<?php
							}
						else if($c==3)
							{
							$c = 0;
					?>

					<?php
							     $icon="../gallery/".$row1["Image"];
								  $icon1="../gallery1/".$row1["Image"];
					?>
    					<div class="col-sm-4 gallery-grids-left">
    						<div class="gallery-grid">
    							<a class="example-image-link" href="<?php echo $icon; ?>" data-lightbox="example-set" data-title="<?php echo $row1["Description"]; ?>">
    								<div id="gal-img"><img src="<?php echo $icon1; ?>" alt="" /></div>
    								<div class="captn">
    									<h4><?php echo $row1["Poster_Name"]; ?></h4>
    									<p><?php echo $row1["Date"]; ?></p>
    								</div>
    							</a>
    						</div>
    					</div>
						<?php }} ?>


    					<div class="clearfix"> </div>
    				</div>

    				<div class="clearfix"> </div>
    				<script src="js/lightbox-plus-jquery.min.js"> </script>

	</div>
	</div>
	<!-- //gallery -->

</section>

   </div>

		<!-- //banner -->
<?php include 'footer.php'; ?>
