<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chronicle | Reinvent your destiny</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="write your keywords" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- footer stylesheet -->
    <link href="css/footer3.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
  <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
	<style>
	  .rad-txt
	  {
	    margin-top:40px;
	   }
	   .occasional_left
	   {
	     position:relative;
		 float:left; 
	   }
	   .occasional_right
	   {
	     position:relative;
		 float:right;
		 margin-left: 50px;
	   }
	   .occasional li span
	   {
	     font-weight:bold; 
	   }
	  .aa
	  {
	   text-align:center;
	   height: 150px; 
	   border:1px solid green;
	  }
	  .aa h3
	  {
	    padding-bottom:10px; 
		
	  }
	  
	</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <?php
session_start(); 
  if(isset($_SESSION["userid"]))
  {
    $eml=$_SESSION["userid"];
	$con1=mysql_connect("localhost","root","harry@238gupta");
	if(!$con1)
	{
	  die("server not connected");
	}
	mysql_select_db("blog",$con1);
	$result1=mysql_query("select * from user_register where email='$eml'");
	$row1=mysql_fetch_array($result1);
  }
?>
    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Chronicle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                            <a class="navbar-brand" href="indexa.php">Chronicle</a>
                        </h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                        <ul class="nav navbar-nav navbar-left cl-effect-15">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden">
                                <a class="page-scroll" href="#page-top"></a>
                            </li>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="gallary.php">Gallary</a>
                            </li>
							<li>
                                <a href="quotes.php">Quotes</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Books
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="other_books.php">Other Books</a>
                                    </li>
                                    <li>
                                        <a href="our_books.php">Our Books</a>
                                    </li>
                                  <!--  <li>
                                        <a href="checkout.html">checkout</a>
                                    </li>
									                   <li>
                                        <a href="payment.html">Payment</a>
                                    </li>-->
                                </ul>
                            </li>

                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                             <li class="dropdown">
							       <a href="#" title="#" class="dropdown-toggle effect-3" data-toggle="dropdown">
                                      <span class="fa fa-user nav-icon" aria-hidden="true"></span> <b class="caret"></b>
                                   </a>
								   <ul class="dropdown-menu">
								       <?php 
										 if(isset($_SESSION["userid"]))
										 {
										  ?>
										   <li>
											   <a href="user_profile.php" title="click for profile">
												    Profile<?php echo "(Hi ".$row1["First_Name"].")"; ?>
											   </a>
										   </li>
										   <li>
											   <a href="logout.php" title="click to logout">
												    Logout
											   </a>
										   </li>
									     <?php 
										 }
										 else
										 {
										 ?>
										   <li>
										     <a href="login.php" title="SignIn & SignUp">
                                      			 SingnIn & SignUp
                                             </a>
										   <li>
										  <?php
										 }
										 ?>
								   </ul>
							</li>

                        </ul>
                        <!-- search-bar -->
                        <div class="search-bar-agileits">
                            <div class="cd-main-header">
                                <ul class="cd-header-buttons">
                                    <li>
                                        <a class="cd-search-trigger" href="#cd-search">
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- cd-header-buttons -->
                            </div>
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Type and Hit Enter...">
                                </form>
                            </div>
                        </div>
                        <!-- //search-bar ends here -->
                        <!-- shopping cart -->
                        <!--<div class="cart-mainf">
                            <div class="chrcart chrcart2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="top_chr_cart" type="submit" name="submit" value="">
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>-->
                        <!-- //shopping cart ends here -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.container -->
            </div>
        </nav>
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
       <?php
			    $con2=mysql_connect("localhost","root","harry@238gupta");
				if(!$con2)
				{
				  die("server not connected");
				}
				mysql_select_db("blog",$con2);
				$result2=mysql_query("select * from free_books where Book_ID='1021'");
				$row3=mysql_fetch_row($result2);
			 ?>
		<!-- /new_arrivals -->
		   
		<div class="section singlep_btm">
			<div class="container">
				<div class="new_arrivals">
					<h4 class="rad-txt">
						<span class="abtxt1">featured</span>
						<span class="abtext"> products</span>
					</h4>
					<!-- row3 -->
					<?php
					$a=0;
					 for($i=27;$i<sizeof($row3);$i++)
					 {
					   if($row3[$i]==="")
					   {
					   }
					   else
					   {
					?>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<div class="aa">
									    <h3><?php echo ++$a;?><br>
										  <?php echo $row3[$i]; ?>
										</h3>
									</div>
								</a>
							</div>
							<div class="caption">
								<!--<h4>Marketing</h4>
								<p>Scott Harris</p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book1">
									<input type="hidden" name="amount" value="180.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>-->
							</div>
						</div>
					</div>
					<?php
					}}
					?>
					<!-- //row3 -->
					<div class="clearfix"></div>
				</div>
				<!--//new_arrivals-->
				<div class="clearfix"></div>

			</div>
		</div>
		<!--// Single -->
		<!-- footer -->
		<div class="footer-bottom section">
			<div class="container">
				<!-- newsletter -->
				<div class="subscribe-main section-w3layouts text-center">
					<h4 class="rad-txt">
						<span class="abtxt1">keep yourself</span>
						<span class="abtext">updated</span>
					</h4>
					<h5>subscribe to our newsletter to stay up-to-date with our projects.</h5>
					<div class="subscribe-form">
						<form action="#" method="post" class="subscribe_form">
							<div class="email-news">
								<input type="email" placeholder="Email" required="">
							</div>
							<div class="sub-news">
								<input type="submit" value="subscribe">
							</div>
						</form>
						<div class="clearfix"> </div>
					</div>
					<p>We respect your privacy.No spam ever!</p>
				</div>
				<!-- //newsletter ends here -->
				<!-- footer grids-->
				<div class="footer-cpy">
					<!-- footer-grid1 -->
					<div class="col-md-3 col-sm-6 footer-logo">
						<h3>
							<a href="index.html">Chronicle</a>
						</h3>
						<h4>about us</h4>
						<p>Vallis Molestie Arcu Morbi Dapibus Suscipit Ante Sit Efficitur Eu estie Arcu Mor Anestie Ate Vesti.</p>
					</div>
					<!-- //footer-grid1 -->
					<!-- footer-grid2 -->
					<div class="col-md-3 col-sm-6 footer-nav text-center">
						<h4>navigation</h4>
						<ul>
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About us</a>
							</li>
							<li>
								<a href="shop.html">shop</a>
							</li>
							<li>
								<a href="contact.html">contact us</a>
							</li>
						</ul>
					</div>
					<!-- //footer-grid2 -->
					<!-- footer-grid3 -->
					<div class="col-md-3 col-sm-6 blog-footer">
						<h4>latest from blog</h4>
						<div class="blog1">
							<div class="col-md-3 col-sm-3 col-xs-2 bl1">
								<a href="#">
									<img src="images/b1.jpg" alt="" class="img-responsive" />
								</a>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 bl2">
								<a href="#">Dapibus Suscipit Ante Sit by instagram</a>
								<p>February 15, 2018</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="blog1">
							<div class="col-md-3 col-sm-3 col-xs-2 bl1">
								<a href="#">
									<img src="images/b2.jpg" alt="" class="img-responsive" />
								</a>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-10 bl2">
								<a href="#">Dapibus Suscipit Ante Sit by instagram</a>
								<p>February 20, 2018</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<!-- //footer-grid3 -->
					<!-- footer-grid4 -->
					<div class="col-md-3 col-sm-6 contact-foot text-right">
						<h4>contact us</h4>
						<ul>
							<li>
								<span class="fa fa-home"></span>
								1185 Burlington
								<br> Canada.
							</li>
							<li>
								<span class="fa fa-phone"></span>
								+12 345 678
							</li>
							<li>
								<span class="fa fa-envelope"></span>
								<a href="mailto:info@example.com">mail@chronicle.com</a>
							</li>
						</ul>
					</div>
					<!-- //footer-grid4 -->
					<div class="clearfix"></div>
				</div>
				<!-- //footer-grids -->
				<!-- footer social -->
				<div class="footer-social text-center">
					<h4>stay connected</h4>
					<ul>
						<li>
							<a href="#">
								<span class="fa fa-facebook icon_facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter icon_twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-dribbble icon_dribbble"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-google-plus icon_g_plus"></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //footer social -->
			</div>
			<!-- //footer container -->
		</div>
		<!-- //footer -->
		<div class="cpy-right">
			<p>© 2018 Chronicle. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //home -->
	<!-- Common js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!--// Common js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		chr.render();

		chr.cart.on('chr_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- zoom -->
	<script src="js/imagezoom.js"></script>
	<!-- zoom-->
	<!-- single -->
	<!-- FlexSlider -->
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider1').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--search jQuery-->

	<!-- Scrolling Nav JavaScript -->
	<script src="js/scrolling-nav.js"></script>
	<!-- //fixed-scroll-nav-js -->
	<!--//scripts-->
	<script src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

</body>

</html>
