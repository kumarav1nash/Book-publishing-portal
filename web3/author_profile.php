<?php

session_start();
include 'dbconnect.php';
  if(isset($_SESSION["userid"]))
  {
    $eml=$_SESSION["userid"];
  $result1=mysqli_query($con,"select * from user_register where email='$eml'");
  $row1=mysqli_fetch_array($result1);
  }
 ?>s

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dymension | Reinvent your destiny</title>
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
	<!-- author_profile -->
	

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!--<script src="js/jquery.min.js"></script>-->

<script src="js/jquery-1.11.1.min.js"></script>-->
	<!-- //author_profile -->
    <style>
	 
.fb-profile img.fb-image-lg{
    z-index: 0;
    width: 100%;  
    margin-bottom: 10px;
}

.fb-image-profile
{
    margin: -90px 10px 20px 80px;
    z-index: 9;
    width: 20%; 
}

/***
Bootstrap Line Tabs by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

/* Tabs panel */
.tabbable-panel {
  border:1px solid #eee;
  padding: 10px;
}

/* Default mode */
.tabbable-line > .nav-tabs {
 background-color:#993399;
  border: none;
  margin: 0px;
}
.tabbable-line > .nav-tabs > li {
  margin-right: 2px;
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: #fff;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
  border-bottom: 4px solid #000;
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
  border-bottom: 4px solid #000;
  position: relative;
}
.tabbable-line > .nav-tabs > li.active > a {
  border: 0 !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
}
.tabbable-line > .tab-content {
  margin-top: -3px;
  background-color: #fff;
  border: 0;
  border-top: 1px solid #eee;
  padding: 15px 0;
}
.portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
}

/* Below tabs mode */

.tabbable-line.tabs-below > .nav-tabs > li {
  border-top: 4px solid transparent;
}
.tabbable-line.tabs-below > .nav-tabs > li > a {
  margin-top: 0;
}
.tabbable-line.tabs-below > .nav-tabs > li:hover {
  border-bottom: 0;
  border-top: 4px solid #fbcdcf;
}
.tabbable-line.tabs-below > .nav-tabs > li.active {
  margin-bottom: -2px;
  border-bottom: 0;
  border-top: 4px solid #f3565d;
}
.tabbable-line.tabs-below > .tab-content {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}

.menu_title {
    padding: 15px 10px;
    border-bottom: 1px solid #eee;
    margin: 0 5px;
	
}


@media (max-width:768px){
    
.fb-profile-text>h1{
    font-weight: 700;
    font-size:16px;
}

.fb-image-profile
{
    margin: -45px 10px 0px 25px;
    z-index: 9;
    width: 20%; 
}
}

    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<?php

?>
    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only"></span>
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
                                <a href="../../web3/index.php">Home</a>
                            </li>
                            <li>
                                <a href="../../web3/gallary.php">Gallary</a>
                            </li>
							<li>
                                <a href="../../web3/quotes.php">Quotes</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Books
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../../web3/other_books.php">Other Books</a>
                                    </li>
                                    <li>
                                        <a href="../../web3/our_books.php">Our Books</a>
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
                                <a href="../../web3/blog.php">Blog</a>
                            </li>
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">AUTHOR
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                      <?php 
									 if(isset($_SESSION["authorid"]))
										 { 
									?>
									<li>
                                        <a href="../visitors%20web/index.php">Author Section</a>
                                    </li>
									<?php }
									 else
									 {
									 ?>
									<li>
                                        <a href="author_login.php">Login</a>
                                    </li>
                                    <li>
                                        <a href="author_signup.php">Author Registration</a>
                                    </li>
									<?php
									}
                                     ?>
                                  
                                </ul>
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
											   <a href="../../web3/user_profile.php" title="click for profile">
												    Profile<?php echo "(Hi ".$row1["First_Name"].")"; ?>
											   </a>
										   </li>
										   <li>
											   <a href="../../web3/logout.php" title="click to logout">
												    Logout
											   </a>
										   </li>
									     <?php
										 }
										 else
										 {
										 ?>
										   <li>
										     <a href="../../web3/login.php" title="SignIn & SignUp">
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
		<?php 
			$eml=$_SESSION["authorid"];
			$result2=mysqli_query($con,"select * from author_register where Email='$eml'");
			$row2=mysqli_fetch_array($result2);
			 $icon="../AuthorProfilePic1/".$row2["Author_Profile_Pic"];
	   ?>
		<div class="container">
  <div class="row">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="../Images/Quotefancy-15478-3840x2160.jpg" alt="Profile image example"/>
        <img align="left" class="fb-image-profile thumbnail" src="<?php echo $icon;  ?>" alt="Profile image example"/>
        <div class="fb-profile-text">
            <h1><?php echo $row2["Name"]; ?></h1><p><?php echo "(".$row2["Profession"].")"; ?></p>
        </div>
    </div>
  </div>
</div> <!-- /container fluid-->  
<div class="container">
  <div class="col-sm-8">

      <div data-spy="scroll" class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
		     <li>
              <a href="#tab_default_2" data-toggle="tab">
             timeline</a>
            </li>
			<li>
              <a href="#tab_default_3" data-toggle="tab">
             Books</a>
            </li>
             <li>
              <a href="#tab_default_4" data-toggle="tab">
             Blogs</a>
            </li>
            <li class="active">
              <a href="#tab_default_1" data-toggle="tab">
              About  </a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1">
 
              <p>
                My daughter  is good looking, with pleasant personality, smart, well educated, from well cultural and  a religious family background. having respect in heart for others.  
                would like to thanks you for visiting through my daughter;s profile. 
                She has done PG in Human Resources after her graduation. 
                At present working IN INSURANCE sector as Manager Training .
              </p>
              <h4>About her Family</h4>
              <p>
                About her family she belongs to a religious and a well cultural family background. 
                Father - Retired from a Co-operate Bank as a Manager. 
                Mother - she is a home maker. 
                1 younger brother - works for Life Insurance n manages cluster. 
              </p>
              <h4>Education </h4>
              <p>I have done PG in Human Resourses</p>
              <h4>Occupation</h4>
              <p>At present Working in Insurance sector</p>
           
            </div>
            <div class="tab-pane" id="tab_default_2">
              <p>
                Education& Career
              </p>
              <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                     <label for="email">Highest Education:</label>
                      <p> MBA/PGDM</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>

               </div>
              </div>

             
           
            </div>
            <div class="tab-pane" id="tab_default_3">
              <p>
                Family Details
              </p>
              <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                     <label for="email">Highest Education:</label>
                      <p> MBA/PGDM</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>

               </div>
              </div>
            </div>
             <div class="tab-pane" id="tab_default_4">
              <p>
               Lifestyle

              </p>
               <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                     <label for="email">Highest Education:</label>
                      <p> MBA/PGDM</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>
                  <div class="form-group">
                     <label for="email">Place of Birth:</label>
                      <p> pune, maharashtra</p>
                 </div>

               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="col-sm-4">
   <div class="panel panel-default">
    <div class="menu_title" style="text-align:center;">
       About Author
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                 <div class="row">
				   <div class="col-lg-4"><label>Sex:</label></div>
                   <p><?php echo $row2["Sex"]; ?></p>  
                 </div>
                  <div class="row">
                      <div class="col-lg-4"><label for="email">Age:</label></div>
                      <p><?php echo $row2["Age"]; ?></p>
                  </div>
                  <div class="row">
                      <div class="col-lg-4"><label for="email">Sudied at:</label></div>
                      <p><?php echo $row2["College_Name"]; ?></p>
                  </div>
                   <div class="row">
                      <div class="col-lg-4"><label for="email">Course:</label></div>
					   <p><?php echo $row2["Course"]; ?></p>
                   </div>
                    <div class="row">
                      <div class="col-lg-4"><label for="email">Worked at:</label></div>
                      <p><?php echo $row2["Company_name"]; ?></p>
                    </div><br><br>
					
                    <div class="form-group">
                      <label for="email">Contact Details</label>
                    </div>
                     <div class="form-group">
                      <label for="email">Live in:</label>
                      <p><?php echo $row2["Address"]; ?></p>
                    </div>
                      <div class="form-group">
                      <label for="email">Contact Email:</label>
                      <p><?php echo $row2["Email"]; ?></p>
                    </div>
            </div>
        </div>
    </div>
</div>
  </div>
</div>
       


        <!-- footer -->


        <div class="footerv3-w3ls">

              <!-- footerv3-top -->
              <div class="footerv3-top">
                  <div class="container">
                      <div class="col-md-3 col-sm-6 footv3-left">
                          <h3>About Us</h3>
                          <p>We are a team commited to bring a dimensional change in the society. </p>
                      </div>
                      <div class="col-md-3 col-sm-6 footv3-left">
                          <h3>Get In Touch</h3>
                          <p>message us on given mail</p>

                          <div class="fv3-contact">
                              <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                              <p>Dehradun</p>
                          </div>
                          <div class="fv3-contact">
                              <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                              <p>+456 123 7890</p>
                              <div class="fv3-contact">
                              </div>
                              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                              <p>
                                  <a href="mailto:example@email.com">info@example.com</a>
                              </p>
                          </div>
                          <div class="clearfix"></div>

                      </div>
                      <div class="col-md-3 col-sm-6 footv3-left">
                          <h3>Latest releases</h3>
                          <ul>
                              <li>
                                  <a href="#">
                                      <img src="../../web3/images/lt1.jpg" alt="" class="img-responsive">
                                  </a>
                              </li>

                          </ul>
                      </div>
                      <div class="col-md-3 col-sm-6 footv3-left">
                          <h3>Subscribe</h3>
                          <p>Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has </p>
                          <form action="#" method="post">
                              <input type="text" value="Your Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
                              <input type="submit" value="Subscribe">
                          </form>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <!-- /footerv3-top -->
          </div>


        <!-- copyright footer -->
        <div class="cpy-right">
            <p>© 2018 Dymenson. All rights reserved <span style="color:transparent;"> | Design by</span>
                <a href="http://w3layouts.com"><span style="color:transparent;">YouthSOft</span></a>
            </p>
        </div>
    </div>
    <!-- //home -->
    <!-- js -->
    <script src="../../web3/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="../../web3/js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="../../web3/js/minicart.js"></script>
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
    <!-- Scrolling Nav JavaScript -->
    <script src="../../web3/js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
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
    <!-- start-smooth-scrolling -->
    <script src="../../web3/js/move-top.js"></script>
    <script src="../../web3/js/easing.js"></script>
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
    <script src="../../web3/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- about bottom grid Numscroller -->
    <script src="../../web3/js/numscroller-1.0.js"></script>
    <!-- //about bottom grid Numscroller -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../web3/js/bootstrap.js"></script>
</body>

</html>

