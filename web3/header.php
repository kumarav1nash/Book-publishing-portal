<!DOCTYPE html>
<html lang="en">

<head>
<title>TheBookTube</title>
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
<!-- gallery links -->
<link href="css/stylee.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!-- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
$('.gallery a').Chocolat();
});
</script>
<style>
.rad-txt
{
margin-top:80px;
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
<span class="sr-only"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<h1>
<a class="navbar-brand" href="index.php"><img src="../Images/3_20181227_173011_0001.png" class="img-responsive" alt="Logo" height="50px" width="280px" style="margin-top:-10px;"></a>
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
<!-- <li>
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
<!-- gallary sectiongoes here -->
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