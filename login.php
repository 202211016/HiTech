<?php

session_start();
if(isset($_SESSION['msg']))
{
	echo '<script>alert("Logged successfully!")</script>';
	unset($_SESSION['msg']);
}
if(isset($_SESSION['msg_1']))
{
	echo '<script>alert("Not verified account please create an account!")</script>';
	unset($_SESSION['msg_1']);
}
if(isset($_SESSION['login_user']))
{
	$login_session=$_SESSION['login_user'];
	echo "Welcome : $login_session";
	
}
?>

<!DOCTYPE html>
<html>
<head>
<title>HI-TECH</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto:info@example.com">hitech@gmail.com</a></li>|
					<li class="top_link"><a href="login.php">Login</a></li>
					<li class="top_link"><a href="logout.php">logout</a></li>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header-top">
	 <div class="header-bottom">
		 <div class="container">			
				<div class="logo">
					<a href="index.php"><h1>HI-TECH</h1></a>
				</div>
			 <!---->
		 
			 
			 <div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
					<li class="grid"><a href="#">Products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Machine Screw</h4>
									<ul>
										<li><a href="product.html">Forged brass fitting</a></li>
										<li><a href="product.html">Brass fitting</a></li>
										<li><a href="product.html">CNC turned parts</a></li>
										<li><a href="product.html">Thumbs screw</a></li>
										
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Nuts</h4>
									<ul>
										<li><a href="product.html">Brass insert nuts</a></li>
										<li><a href="product.html">Long hex coupling nut M4x40<</a></li>
										<li><a href="product.html">CNC lathe parts</a></li>
										<li><a href="product.html">Brass nut</a></li>
										<li><a href="product.html">Brass screw nut</a></li>
										<li><a href="product.html">Brass hex nut</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Special screws and bolts</h4>
									<ul>
										<li><a href="product.html">Motorcycle parts</a></li>
										<li><a href="product.html">Thread insert Brass</a></li>
										<li><a href="product.html">Stainless steel screw A4 waterproofs</a></li>
										<li><a href="product.html">Partial thread with ball</a></li>
										<li><a href="product.html">Electronic screw</a></li>
										<li><a href="product.html">SEMS ,hardware special screw bolt</a></li>
										<li><a href="product.html">Extemly long bolt</a></li>
										<li><a href="product.html">Screw in table leg</a></li>
										<li><a href="product.html">Special aluminium screw</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Special products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Brass Tubing</h4>
									<ul>
										<li><a href="product.html">copper & Brass tube</a></li>
										<li><a href="product.html">Antique Brass tube</a></li>
										<li><a href="product.html">Slotted & Chnnel Brass tube</a></li>
										<li><a href="product.html">Brass square tube</a></li>
										<li><a href="product.html">Brass round bar</a></li>
								</div>
								<div class="col1 me-one">
									<h4>Crowd control post</h4>
									<ul>
										<li><a href="product.html">374</a></li>
										<li><a href="product.html">419,420</a></li>
										<li><a href="product.html">H14</a></li>
										<li><a href="product.html">ropes</a></li>
										<li><a href="product.html">stanchious</a></li>
										
									</ul>	
								</div>					
								<!--div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="product.html">Levis</a></li>
										<li><a href="product.html">Persol</a></li>
										<li><a href="product.html">Nike</a></li>
										<li><a href="product.html">Edwin</a></li>
										<li><a href="product.html">New Balance</a></li>
										<li><a href="product.html">Jack & Jones</a></li>
										<li><a href="product.html">Paul Smith</a></li>
										<li><a href="product.html">Ray-Ban</a></li>
										<li><a href="product.html">Wood Wood</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="typo.html">Typo</a></li>
					<li class="grid"><a href="contact.html">Contact</a></li>
				</ul>
				<div class="clearfix"> </div>
			 </div>
			 <!---->
			 <div class="cart box_1">
				 <a href="checkout.html">
					<h3> <div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h3>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="clearfix"> </div>
			 <!---->			 
			 </div>
			<div class="clearfix"> </div>
	  </div>
</div>
<!---->
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>
				 <form action="login_1.php" method="post">
					 <h5>Username:</h5>	
					 <input type="text" name="email">
					 <h5>Password:</h5>
					 <input type="password" name="passwords">					
					 <input type="submit" value="Login" name="login">
					  <a class="acount-btn" href="account.php">Create an Account</a>
				 <a href="#">Forgot Password ?</a>
				 </form>
					
		 </div>	
						
				
		 <div class="clearfix"></div>
	 </div>
</div>
										
<!---->
<div class="shoping">
	 <div class="container">
		 <div class="shpng-grids">
			 <div class="col-md-4 shpng-grid">
				 <h3>Shipping  charges will be tanken on weight</h3>
				 <p>On Order Over </p>
			 </div>
			 <div class="col-md-4 shpng-grid">
				 <h3>Order Return</h3>
				 <p>Return Within 14days</p>
			 </div>
			 <div class="col-md-4 shpng-grid">
				 <h3>COD</h3>
				 <p>Cash On Delivery</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="#">Who We Are</a></li>
					 <li><a href="contact.html">Contact Us</a></li>
					 <li><a href="#">Our Sites</a></li>
					 <li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Careers</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="account.php">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 <li><a href="#">Discount</a></li>
					 <li><a href="#">Track your order</a></li>					 					 
				 </ul>
			 </div>
			 <!--div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#">> Wedding</a></li>
					 <li><a href="#">> Jewellerys</a></li>
					 <li><a href="#">> Shoes</a></li>
					 <li><a href="#">> Flowers</a></li>
					 <li><a href="#">> Cakes</a></li>
					 <li><a href="#">...More</a></li>					 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>		
	 </div>
</div>
<!---->
 <!--div class="copywrite">
	 <div class="container">
			 <p>Copyright © 2015 Wedding Store. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>
</div>		 
</body>
</html>