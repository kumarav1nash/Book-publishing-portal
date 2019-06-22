<?php 
session_start();
  include 'dbconnect.php';
  include 'check_user_login_status.php';
 if(isset($_POST["liked"]))
 {
   $postid= $_POST["postid"];
   $resul=mysqli_query($con,"select * from free_books where Book_ID=$postid");
   $row5=mysqli_fetch_array($resul);
   $n=$row5["likes"];
    mysqli_query($con,"update free_books set likes=$n+1 where Book_ID=$postid");
	mysqli_query($con,"insert into likes_on_book(userid, postid) values (1, $postid)");
	mysqli_close($con);
	exit();
 }
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dymenson | Reinvent your destiny</title>
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
	<!--dispaly book turnjs script -->
     <script type="text/javascript" src="js/turnjs/jquery.min.1.7.js"></script>
     <script type="text/javascript" src="js/turnjs/modernizr.2.5.3.min.js"></script>
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
	padding:10px;

  }
  #page-content
  {
    position:fixed !important;

    background-color: white;

    opacity: 1 !important;
    top: 50%;
    left: 50%;



	z-index:+30;
  }
  #contnt{
    position: fixed;
    display: none;
    top: 0px;
    left: 0px;
    right: 0px;

    bottom: 0px;
    z-index:+29;
    background: #000;

  }
  #contnt .closeBook{
    position: fixed;
    top: 5px;
    right: 15px;

    z-index:+29;
  }
  .bookTrailer
  {
    margin-top: 80px; 
	display:none;
  }
    #comments_section
{
   position:relative;
   height:auto;
   margin-top:20px;
   width:100%;
}
.media
{
 border-bottom:1px solid black;
}
   #quotes_content
	  {
	   position:relative;
	   height: auto;
	   width:100%; 
	  }
	  .rad-txt
	  {
	    margin-top: 30px; 
	  }
	  #q_block
	  {
	    position:relative;
		width:100%;
		height: auto;
		background-color:#FFFFFF;
		border: 1px solid #F3F3F3; 
		text-align:center;
	  }
	  #q_block_content
	  {
	    position:relative;
	    margin:20px;
		font-size:20px;
		color:#999999;
		font-style:normal;
	  }
	  #q_head
	  {
	    position:relative;
	   width:100%;
	   height: 40px;
	   background-color:#F3F3F3; 
	  }
	  #poster
	  {
	     position:relative;
	    float:left;
		width: 150px;
	  }
	  #poster img
	  {
	    float:left;
		height:40px;
		width:38px;
		border-radius:50%;
	  }
	  #poster_name
	  {  
	     float:right;
		 margin-top:10px;
		 margin-right:10px;
		 text-align:center; 
		 font-size=24px;
		 font-weight:bold;
	  }
	  #q_date
	  {
	     float:right;
		 font-size=24px;
		 text-align:center;
		 width: 130px;
		 margin: 10px;
	   }
	   #leave_comment
	   {
	     width:100%;
		 height:auto;
	   }
	   .like_button_section
	   {
	     position:relative;
		 margin-bottom:10px;
		 height:50px;
		 padding:5px;
	   }
	   .unauth_like, .auth_like, .auth_like 
	   {
	     float:left;
		 padding-right: 10px;
	   }
	   .num_of_likes
	   {
	     float:left;
		 padding-left:10px; 
	   }
	</style>
	<script>
			function submitcomment()
			 {
					var request;
					try 
					{
						request= new XMLHttpRequest();
					}
					catch (tryMicrosoft) 
					{
						try 
						{
						   request= new ActiveXObject("Msxml2.XMLHTTP");
						}
						catch (otherMicrosoft) 
						{
							try 
							{
								request= new ActiveXObject("Microsoft.XMLHTTP");
							}
							catch (failed) 
							{
								request= null;
							}
						}
					}
					var webpage= location.href;
					position= webpage.lastIndexOf("/"); 
					var lastpart= webpage.substring(position + 1);
					var period= lastpart.indexOf(".");
					var complete= lastpart.substring(0, period);
					complete= complete.replace(/-/g, "_");
					var url= "comments_handler.php";
					var pst_id=document.getElementById("po_id").value;
					var username= document.getElementById("name_entered").value;
					var usercomment= document.getElementById("comment_entered").value;
					var vars= "postid="+pst_id+"&name="+username+"&comment="+usercomment+"&webpage="+complete;
					request.open("POST", url, true);
					request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					request.onreadystatechange= function()
					 {
						if (request.readyState == 4 && request.status == 200) 
						{
							var return_data=  request.responseText;
							document.getElementById("showcomments").innerHTML= return_data;
						}
					}
					request.send(vars);
					document.getElementById("comment_entered").value="";
					document.getElementById("name_entered").value="";
			}
			
			
			</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top" id="hideWhenBookOpen">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Dymenson</span>
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
											   <a href="user_profile.php" title="click for profile">
												    Profile<?php echo "(Hi ".$row2["First_Name"].")"; ?>
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
       <div class="">
			<!-- banner-text -->
			<div>
				<div class="bookTrailer">
				  <iframe width="100%" height="315" src="https://www.youtube.com/embed/NjivQNJdbXg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<!-- //banner-text -->
		</div>
		<!-- //banner -->
       <?php
			  $pid=$_REQUEST["book_id"];
				$result1=mysqli_query($con,"select * from free_books where Book_ID=$pid");
				$row1=mysqli_fetch_array($result1);
			 ?>

		<?php
						  $icon="../Books/".$row1["Book_Front_Image"];

						?>
		<!-- breadcrumbs -->
		<div class="crumbs text-center" >
			<div class="container">
						<h4 class="rad-txt">
						  <span class="abtxt1"></span>
						  <span class="abtext"><?php echo $row1["Book_Name"]; ?> </span>
						</h4>
			</div>
		</div>
		<!--//breadcrumbs ends here-->

		<!-- Single -->
		<div class="innerf-pages section">
			<div class="container">
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">
							<ul class="slides">
								<li data-thumb="#">
									<div class="thumb-image">
										<img src="<?php echo $icon; ?>" data-imagezoom="true" alt=" " class="img-responsive">
									</div>
								</li>

								<!--<li data-thumb="#">
									<div class="thumb-image">
										<img src="#" data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li>
								<li data-thumb="#">
									<div class="thumb-image">
										<img src="#" data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li>-->
							</ul>
							<div class="clearfix"></div>
						</div>
						<button class="btn btn-secondary-outline btn-info" style="margin-top:5px;Width:350px;" onClick="readTheBook()">Click here to read</button>
					</div>

				</div>
				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $row1["Book_Name"]; ?>
						<!--<span><?php //echo $row1["Date_Of_Posting_on_Site"]?></span>-->
					</h3>
					<p>by
						<a href="#"><?php echo $row1["Writer_Name"]; ?></a>
					</p>
					<p>Published On
						<a href="#"><?php $date= strtotime($row1["Date_Of_Posting_on_Site"]); echo date("M d, Y",$date); ?></a>
					</p>
					<div class="caption">

						<ul class="rating-single">
						    Ratings:
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="desc_single">
						<h5>Review</h5>
						<p><?php echo nl2br($row1["Book_Review"])?>.</p>
					</div>
					<div class="occasional">
						<h5>Specifications</h5>

						<div class="occasional_left">
							<ul class="single_specific">
								<li>
									<span>Writer    :</span>  <?php echo $row1["Writer_Name"]; ?></li>
								<li>
								<li>
									<span>language  :</span> english</li>
								<li>
									<span>format    :</span> WEB Book</li>
								<li>
									<span>publisher :</span> DYMENSON</li>
							</ul>
						</div>
						<div class="occasional_right">
							<ul class="single_specific">
							    <li>
									<span>edition   :</span> <?php $date= strtotime($row1["Date_Of_Posting_on_Site"]); echo date("M Y",$date); ?></li>
								<li>
									<span>EPISODES  :</span> 10</li>
								<li>
									<span>Country   :</span> INDIA</li>
								<li>
									<span>EDITOR    :</span> Harry Gupta</li>
							</ul>
						</div>

					</div>
					<!--<div class="color-quality">
						<div class="color-quality-right">
							<h5>Also Formats avaiable in:</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">paper back &nbsp;$90.00</option>
								<option value="null">Audio Book &nbsp;$200.00</option>
							</select>
						</div>
					</div>-->

					<div class="clearfix"></div>
					<!--<div class="description">
						<h5>Check delivery, payment options and charges at your location</h5>
						<form action="#" method="post">
							<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}"
							    required="">
							<input type="submit" value="Check">
						</form>
					</div>
					<div class="occasion-cart">
						<div class="chr single-item single_page_b">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="chr_item" value="Single book">
								<input type="hidden" name="amount" value="100.00">
								<button type="submit" class="chr-cart pchr-cart">
									<i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								<a href="#" data-toggle="modal" data-target="#myModal1"></a>
							</form>
						</div>
					</div>-->
				</div>
		    <div class="clearfix"></div>
			<div id="contnt">
        <i class="fa fa-close closeBook" onclick="closeBook()" style="font-size:48px;color:white"></i>
			    <div id="page-content">
				   <div class="flipbook-viewport">
					  <div class="container">
						 <div class="flipbook">
							<?php
							 $b=0;
							 $book_name=$row1["Book_Name"];
							 $bn=str_replace(' ', '%20', $book_name);
							 for($i=0;$i<count(scandir("../Books/".$book_name))-2;$i++)
							 {
							  ?>
							 <div style="background-image:url(../Books/<?php echo $bn; ?>/<?php echo ++$b; ?>.jpg)"></div>
							 <?php
							 }
							?>


						 </div>
					  </div>
                   </div>
				</div>
			</div>
			<div id="comments_section">
                <div class="container">
				        <div class="crumbs text-center" >
							<div class="container">
										<h5 class="rad-txt">
										  <span class="abtxt1"></span>
										  <span class="abtext">Please Leave Your Feedback</span>
										</h5>
							</div>
					    </div>
						<div class="like_button_section">
						     <div id="like_row">
							      <p>If you like this book, please click the below like button. </p>
						  <?php 
						  //if user is registered
						    if(isset($_SESSION["userid"]))
							{
							  $uid=$row2["Email"];
							  $result4=mysqli_query($con,"SELECT * FROM  likes_on_book WHERE userid='$uid' AND postid='$pid'");
							  if($result4==false)
							  {
							    echo mysqli_error();
							  }
							  if(mysqli_num_rows($result4) == 1)
							  {
							  ?>
							   <span><a href="" class="auth_unlike" id="<?php echo $pid;?>"><button>Liked this Book</button></a><p class="num_of_likes">24 people like this book</p></span>
							  <?php
							  }
							  else
							  {
							  ?>
							   <span><a href="" class="auth_like" id="<?php echo $pid;?>"><button>like</button></a><p>24 people like this book</p></span>
							  <?php
							  }
							}
							else
							{
							?>
							  <!-- here if user is not registered -->
							  <span><a href="#" class="unauth_like" id="<?php echo $pid;?>"><button>like</button></a><p class="num_of_likes">24 people like this book</p></span>
							<?php
							}
							?> 
							 </div>
						 
						</div>
						<script type="text/javascript" src="js/jquery.min.js"></script>
						<script type="text/javascript">
						    $(document).ready(function(){
							    //when auth user clicks on like
								 $('.auth_like').click(function(){
								   var postid=$(this).attr('id');
								   alert("you liked this post");
								 });
							});
						</script>
						<div id="leave_comment">
						<input type="hidden" value="<?php echo $row1["Book_ID"] ?>" name="post_id" id="po_id">
						<?php
						  if(isset($_SESSION["userid"]))
						 {
						  ?>
						   <input type="hidden" value="<?php echo $row2["First_Name"]." ".$row2["Last_Name"];?>" name="name" id="name_entered">
						  <?php
					     }  
						 else
						 {
						 ?>
						 <div class="form-group">
						<input class="form-control" type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}" name="name" id="name_entered">
						 </div>
						<?php }
						
						?>
						<div class="form-group">
						  <textarea class="form-control" rows="5" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Leave a comment';}" name="comment" id="comment_entered">Leave a comment</textarea>
						</div>
							<input class="btn btn-info" type="submit" value="comment" onClick="submitcomment()" >
					
					 </div>
						
					   <div class="crumbs text-center" >
							<div class="container">
										<h4 class="rad-txt">
										  <span class="abtxt1"></span>
										  <span class="abtext">comments/Feedback</span>
										</h4>
							</div>
					    </div>
						<div id="showcomments">
							
						</div>
						<div id="zzzz">
						 <div id="quotes_blocks">
							  <?php
								$result3=mysqli_query($con,"select * from read_section where post_id='$pid' ORDER BY ID DESC");
								while($row3=mysqli_fetch_array($result3))
								{
							  ?>
						  <div id="q_block" >
 					      		<div id="q_head">
							   		<div id="poster">
							      			<div id="poster_img">
											  <?php
												 //$email= $row1["Poster_Id"];
												$result=mysqli_query($con,"select * from admin_register where Email='admin@root.com'");
												$row=mysqli_fetch_array($result);
												 $icon="../images/default_pic.png";
											  ?>
									           <img src="<?php echo $icon; ?>" alt="">
								            </div>
										    <div id="poster_name">
											   <?php echo $row3["name"];?>
										    </div>
							         </div>
							         <div id="q_date">
							            <?php 
										  $date=strtotime($row3["date"]);
											echo date("M d, Y",$date); 
										?>
							         </div>    
						        </div>
						        <div id="q_block_content">
					     <?php
						   echo nl2br($row3["comments"]."<br>");
						 ?>
						         </div>
						 
					      </div><br>
				  <?php
				     }
				  ?>
			   </div>
				<?php mysqli_close($con);
				   
				 ?> 
				</div>			
			</div>
		</div>
	</div>
		<!-- /new_arrivals -->
		<div class="section singlep_btm">
			<div class="container">
				<div class="new_arrivals">
					<h4 class="rad-txt">
						<span class="abtxt1">Trending</span>
						<span class="abtext"> Books</span>
					</h4>
					<!-- row3 -->
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="images/lib7.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>Marketing</h4>
								<p>Scott Harris</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li></li>
										<li>

										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book1">
									<input type="hidden" name="amount" value="180.00">
									<button type="submit" class="chr-cart pchr-cart">read this book
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="images/lib1.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>online business</h4>
								<p>Scott Harris</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li></li>
										<li>

										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book2">
									<input type="hidden" name="amount" value="330.00">
									<button type="submit" class="chr-cart pchr-cart">Read this book
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="images/lib2.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>kids</h4>
								<p>Cordebard</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li></li>
										<li>

										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book3">
									<input type="hidden" name="amount" value="280.00">
									<button type="submit" class="chr-cart pchr-cart">Read this book
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="images/lib3.jpg" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>work from home</h4>
								<p>Cordebard</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li></li>
										<li>
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book4">
									<input type="hidden" name="amount" value="140.00">
									<button type="submit" class="chr-cart pchr-cart">Read this book
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
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
							<a href="index.php">Dymenson</a>
						</h3>
						<h4>about us</h4>
						<p>Spreading the knowledge..</p>
					</div>
					<!-- //footer-grid1 -->
					<!-- footer-grid2 -->
					<div class="col-md-3 col-sm-6 footer-nav text-center">
						<h4>navigation</h4>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="#">About us</a>
							</li>
							<li>
								<a href="#">Books</a>
							</li>
							<li>
								<a href="#">contact us</a>
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
							       Dehradun
								<br> INDIA.
							</li>
							<li>
								<span class="fa fa-phone"></span>

							</li>
							<li>
								<span class="fa fa-envelope"></span>
								<a href="mailto:mail@Dymenson.com">mail@Dymenson.com</a>
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
			<p>© 2018 Dymenson. All rights reserved | Design by
				<a href="http://YouthSoft.com"> YouthSoft.</a>
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
    <!-- javascript code for book display-->

<script type="text/javascript">
function readTheBook()
{

document.getElementById('hideWhenBookOpen').style.display="none";
   document.getElementById('contnt').style.display="block";
   document.getElementById('page-content').style.display="block";

}
function closeBook()
{

document.getElementById('contnt').style.display="none";
document.getElementById('hideWhenBookOpen').style.display="block";


}

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,

			// Height

			height:600,

			// Elevation

			elevation: 50,

			// Enable gradients

			gradients: true,

			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['lib/turn.js'],
	nope: ['lib/turn.html4.min.js'],
	both: ['css/basic.css'],
	complete: loadApp
});

</script>

</body>

</html>
