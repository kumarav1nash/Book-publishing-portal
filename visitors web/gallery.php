<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
   session_start();
   include '../web3/dbconnect.php';

   if(isset($_SESSION["userid"]))
   {
    $eml=$_SESSION["userid"];
   
    $result=mysqli_query($con,"select * from admin_register where email='$eml'");
    $row=mysqli_fetch_array($result);
   }
?>
<!DOCTYPE html>
<head>
<title>Visitors | Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/lightbox.css">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<style>
 #gal-img
 {
   position:relative;
   width: 350px;
   height:350px; 
 }
 .captn
 {
  width:300px;
  height:200px; 
  margin-bottom:40px;
 }

</style>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<!--database connectivity -->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username"><?php
							 if(isset($_SESSION["userid"]))
							 {
							   echo $row["First_Name"];
						     }
							else 
							 {
							   $redirect="Location:login.php";
							   echo header($redirect);
							 }
						   ?>
             </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li class="disabled"><a><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li class="disabled"><a><i class="fa fa-cog"></i> Settings</a></li>
                <li ><a href="logout.php"><i class="fa fa-key"></i> <span style="color:red !important; font-weight:bold !important;">Log Out</span></a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
						<li><a href="typography.html">Typography</a></li>
						<li><a href="glyphicon.html">glyphicon</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul>
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Font awesome </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Form Elements</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
						<li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-upload"></i>
                        <span>Upload</span>
                    </a>
                    <ul class="sub">
                        <li><a class="active" href="gallery.php">Galleries</a></li>
						<li><a href="Books.php">Books</a></li>
                        <li><a href="Blogs.php">Blogs</a></li>
                        <li><a href="Quotes.php">Quotes</a></li>
                    </ul>
                </li>
               <!-- <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>-->
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- gallery -->
		<!-- gallery -->
		<!--gallery upload form-->
		
		
		<div>
		 <section class="panel">
		 
                    <header class="panel-heading">
                        Welcome <?php  echo $row["First_Name"]; ?>
						
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-inline" role="form" action="gallery_handler.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                	
								<input type="file" class="form-control"  name="file1" id="gal_photo">
                                	
                            </div>
                            <div class="form-group">
                                	
								<textarea rows="2" cols="30" class="form-control" name="Description" >Details</textarea>
                                	
                            </div>
                          
                               <input type="hidden" name="poster_id" id="poster_id" value="<?php echo $row['Mobile_Number']; ?>">
				<input type="hidden" name="date" id="date" value="<?php echo date("D")." ".date("d/m/Y"); ?>">
				<input type="hidden" name="poster_name" id="poster_name" value="<?php echo $row['First_Name']." ".$row['Last_Name']; ?>">
                            
                            
							<input type="submit" class="btn btn-success" value="Upload">
                        </form>
                        </div>
                    </div>
                </section>
		</div>	
		<div class="gallery">
		<h2 class="panel-heading"><b>Gallery</b></h2>
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
							else if($c==4)
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
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- gallery -->

</body>
</html>
