<?php
session_start(); 
include 'dbconnect.php';

?>

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
<span class="sr-only">Dymension</span>
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
<!--  <li>
<a href="gallary.php">Gallary</a>
</li> -->
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


<!-- about -->
<div class="about-sec section">
<div class="container">
<!-- about-left-grid -->
<div class=" col-md-12">
<h4 class="rad-txt">
<span class="abtxt1">Top picked</span>
<span class="abtext"> Writer Views</span>
</h4>
<div class="wrapper_top_shop pull-left"  style="background:transparent;">
<!-- top picked book section -->
<?php

$result1=mysqli_query($con,"select * from blog_posts  ORDER BY Post_Id DESC");

while($row1=mysqli_fetch_array($result1))
{

?>

<?php
$icon="../upload/".$row1["Post_Image"];
?>

<div class="product-sec1">
<div class="container col-md-9 col-sm-9 col-xs-12">

<div class="panel panel-default">
<div class="panel-heading"  style="background:#E85342; color:white;">
<div class="panel-title" style="display:inline; margin:2px; padding:5px; border-radius: 5px;color:black; background:white;">
<?php echo $row1["Post_Subject"];?>
</div>
</div>
<div class="panel-heading"  style="background:#F7C052; color:black;">
<div class="panel-title"><h4><?php echo $row1["Post_Title"];?></h4></div>

</div>
<div class="panel-body">

<div class="pull-left col-md-4"><img src="<?php echo $icon; ?>" alt="" style="height:150px; margin-left: -50px; margin-bottom: -20px;width:250px;"></div>
<div class="pull-right col-md-8">
<p>
<?php
$summery =  $row1["Post_Description"];
$summery . "continue";
echo substr($summery,0,400);
echo "..";
?>
</p>

<p><a href="blog_post.php?post_id=<?php echo $row1["Post_Id"];  ?>" class="btn btn-info" role="button">Read more</a>

</div>
</div>
<div class="panel-footer">Posted by <?php echo $row1["Post_By"] ?> on 11/11/2018

<div class="col-md-3"> likes:100k</div>
<div class="col-md-3"> comments:100k</div>

</div>
</div>
</div>

<?php } ?>
<div class="clearfix" ></div>
</div>

<div class="clearfix"></div>
<!-- //row1 -->

</div>
<!-- <div class="col-md-3 col-sm-3 col-xs-6 pull-right" style="border:2px solid red; height:400px; width:100%"></div>
		<div class="clearfix"></div>



<--//end of top picked booksec -->
<!--<div class="clearfix"></div>-->

<!-- 
 <div class="clearfix"></div>
//about left bottom - services ends here
</div>
</div>
 -->
<!-- //about ends here -->

<!-- footer -->


<?php include 'footer.php'; ?>