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
	   #signupalert
	   {
	    display:none; 
	   }
	   .closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
	</style>
	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">DYMENSON</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                          <a class="navbar-brand" href="index.php"><img src="../Images/20181226_192925_0001.png" class="img-responsive" alt="Logo" height="50px" width="280px" style="margin-top:-10px;"></a>
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
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">AUTHOR
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="author_login.php">Login</a>
                                    </li>
                                    <li>
                                        <a href="author_signup.php">Author Registration</a>
                                    </li>
                                  <!--  <li>
                                        <a href="checkout.html">checkout</a>
                                    </li>
									     <li>
                                        <a href="payment.html">Payment</a>
                                    </li>-->
                                </ul>
                            </li>
                           <li class="dropdown">
							       <a href="#" title="User Login" class="dropdown-toggle effect-3" data-toggle="dropdown">
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
                                      			 User LogIn/SignUp
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
   
		<!-- //banner -->
       
	    <!-- breadcrumbs -->
        <div class="crumbs text-center">
            <div class="container">
                <div class="row">
                    <ul class="btn-group btn-breadcrumb bc-list">
                        <li class="btn btn1">
                            <a href="index.php">
                                <i class="glyphicon glyphicon-home"></i>
                            </a>
                        </li>
                        <li class="btn btn2">
                            <a href="author_login.php"> Author Login/Sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- signin and signup form -->
        <div class="login-form section text-center">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1"></span>
                    <span class="abtext">sign up</span>
                </h4>
                 
				<script>
				  function matchPassword()
				  {
					var p1=document.getElementById("passwd").value;
					var p2=document.getElementById("passwd1").value;
					if(p1!=p2)
					{ 
					 
					  document.getElementById("signupalert").style.display="block";
					   $("#signupform").submit(function(e) {
							e.preventDefault();
						});
					}
				  }
			</script>
                <div id="signupbox" style="margin-top:50px" class="mainbox loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Author Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                <a id="signinlink" href="author_login.php" >Sign In</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form id="signupform" class="form-horizontal" action="author_registration.php" method="post" enctype="multipart/form-data">
                                <div id="signupalert" class="alert alert-danger">
								 <span class="closebtn" onclick="this.parentElement.style.display='none';location.reload();">&times;</span> 
                                    <p>Error: Sign Up failed! Password didn't match.</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Email</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Professional Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="Professionalname" placeholder="Professional Name( If None! keep same )" >
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Phone No</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="PhoneNO" placeholder="Phone Number" required="">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Address</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="address" placeholder="Address" >
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Profession</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                       <input type="radio"  name="profession" value="Student" required="">Student
                 					   <input type="radio"  name="profession" value="Employee" required="">Employee
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">College Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="collegename" placeholder=" College Name ( if student)"  >
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Company Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="companyname" placeholder="Company Name( if employee )"  >
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Course</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="CourseName" placeholder="E.g. BA, B.Sc, BBA, B.tech etc"  >
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Date Of Birth</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="date" class="form-control" name="dob" placeholder="Date Of Birth" required="" >
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Age</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="age" placeholder="Age" required="" >
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Current date</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="hidden" class="form-control" name="curdate" placeholder="" value="<?php echo date("Y-m-d"); ?>" >
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Sex</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                       <input type="radio"  name="sex" value="Male" required="">Male
                 					   <input type="radio"  name="sex" value="Female" required="">Female
									   <input type="radio"  name="sex" value="other" required="">Other
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password" required="">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Confirm Password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="password" class="form-control" name="passwd1" id="passwd1" placeholder="Confirm Password" required="" >
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-3 control-label">Upload your Profile Picture</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="file" class="form-control" name="file1" placeholder="Upload your Profile Picture" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="signup-btn">
                                        <button id="btn-signup" type="submit" class="btn btn-info" onClick="matchPassword()">
                                            <i class="icon-hand-right"></i> &nbsp; Sign Up</button>
                                    </div>
                                </div>
                                <div style="border-top: 1px solid #999; padding-top:20px" class="form-group">

                                    <div class="f-btn">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary">
                                            <i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//signin and signup form ends here-->
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
<!-- //home -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->

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

    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- start-smooth-scrolling -->
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
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
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
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>