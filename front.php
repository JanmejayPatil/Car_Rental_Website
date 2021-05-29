<?php

include('dbConnection.php');

?>



<!DOCTYPE html>
<html>
<head>
	<title>WHEELZ CAR RENTAL</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<style>
		html {
			width : 100vw;
			height: 100vh;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style_front.css">
</head>
<body>
<nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-dark">
	<a class="navbar-brand" href="front.php"><i><b>WHEELZ</b></i></a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-Label="Toggle Navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navLinks">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="front.php" class="nav-link">HOME</a>
			</li>
			<li class="nav-item">
				<a href="signup.php" class="nav-link">Sign Up</a>
			</li>
			<li class="nav-item">
				<a href="signin.php" class="nav-link">Sign In</a>
			</li>
		</ul>
	</div>
</nav>
<section class="container-fluid px-0">
	<div class="row align-items-center">
		<div class="col-lg-6">
			<div id="headingGrp" class="text-white text-center d-none d-lg-block display-3 mt-2">
				<h3>ALL<span>/</span>ABOUT<span>/</span>CARS</h3>
				<h3>ALL<span>/</span>ABOUT<span>/</span>CARS</h3>
				<h3>ALL<span>/</span>ABOUT<span>/</span>CARS</h3>
				<h3>ALL<span>/</span>ABOUT<span>/</span>CARS</h3>
				<h3>ALL<span>/</span>ABOUT<span>/</span>CARS</h3>
				<h3>ALL<span>/</span>ABOUT<span>/</span>CARS</h3>
				<h3>ALL<span>/</span>ABOUT<span>/</span>CARS</h3>
			</div>
		</div>
		<div class="col-lg-6">
			<img src="wheelz_1.png" class="img-fluid">
		</div> 
	</div>	
</section>

<section class="container-fluid px-0">
	<div class="row align-items-center content">
		<div class="col-md-6 order-2 order-md-1">
			<img src="wheelz_2.png" class="img-fluid">
		</div>
		<div class="col-6 text-center order-1 order-md-2">
			<div id="blurb" class="row justify-content-center mb-5 mb-0">
				<div class="col-10 col-lg-8">
					<h2>BEST DEALS</h2> 
					<p>Whether you are looking for a standard economy or compact car rental or something a little bigger like an SUV, full sized van or pickup 4 wheeler we have plenty of options to choose from. We also have subcompacts, compacts, sedans, or luxury options if you want a more upscale rental. You can easily compare prices for each car class looking at our catalog's layout on desktop view in order to pull the best results for your individual needs. </p>
				</div>
			</div>
		</div>
	</div>
	<div class="row align-items-center content">
		<div class="col-6 text-center">
			<div id="blurb" class="row justify-content-center mb-5 mb-md-0">
				<div class="col-10 col-lg-8">
					<h2>GREAT SERVICES</h2> 
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<img src="wheelz_3.png" class="img-fluid">
		</div>
	</div>
</section>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="background:black;color:white;">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
	<a href="front.php" style="color : white">Wheelz </a> <a href="adminsignup.php"> admin</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script>
	$(function (){
		$(document).scroll(function(){
			var $nav= $("#mainNav");
			$nav.toggleClass("scrolled",$(this).scrollTop()> $nav.height()); 
			})
		});
</script>
</body>
</html>