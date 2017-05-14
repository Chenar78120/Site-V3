<?php

include("install.php");
session_start();
install();
if ($_SESSION['loggued_on_user'])
  	header('location:control-panel.php');
?><!DOCTYPE HTML>
<html>
	<head>
		<title>Your personal wedding organizer, weddings - Nubo</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="wedding weddings planner planning organize organizer organizing marriage marriages agenda budget bride" />
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<a href="index.php"><img class="logo" src="img/logo.svg" alt="Logo"></a>
				<nav id="nav">
					<ul>
<?php
	if (!$_SESSION['loggued_on_user'])
	{
?>
						<li><a href="dresses.html" class="button alt account-button">Sign up</a></li>
						<li><a href="login.php" class="button special">Connect</a></li>
					</ul>
<?php
	}
	else
	{
?>
						<li><a href="#" class="button alt log-button"><?php echo 'Hi '.$_SESSION['loggued_on_user'].'!'; ?></a></li>
						<li><a href="logout.php" class="button special disconnect-button">Disconnect</a></li>
					</ul>
<?php
	}
?>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2 class="banner-title">The prerequisite of a successful wedding</h2>
<?php
	if (!$_SESSION['loggued_on_user'])
	{
?>
					<ul class="actions">
						<li><a href="dresses.html" class="signup-button button big special">Create your account</a></li>
					</ul>
<?php
	}
?>
					<img class="logo-small" src="img/logo.svg" alt="Logo">
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="row links">
					<div class="col-xs-offset-3 col-xs-3">
		          		<a href="#two" class="smoothScroll">How does it work?</a>
		          	</div>
		          	<div class="col-xs-3">
		          		<a href="#three" class="smoothScroll">Our offer</a>
		          	</div>
		          	<div class="col-xs-3">
		          		<a href="#">Blog</a>
		          	</div>
					<div class="container">
					<header class="major">
						<h2 class="white-hidden">.</h2>
					</header>
						<div class="row">
								<div class="col-md-2 col-md-offset-4 center-video">
									<img src="img/video.jpg" alt="Video">
								</div>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2 class="h2-text">How does it work?</h2>
					<p class="p-text">The most important event in your life is going to be perfect</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="3u">
							<section class="special">
								<a href="#" class="image fit"><img src="ico/wedding-rings.svg" alt="rings" /></a>
								<h3 class="h3-text">Now that you found the right one...</h3>
								<p class="p-text">You need someone that guides you through the most difficult but funny part: organizing the marriage! Nubo will be your joystick to move through all difficulties and will help you to overcome obstacles. We want to know you better! The wedding date, location and budget are some of the important aspects that will help us to create your perfect marriage!</p>
							</section>
						</div>
						<div class="3u">
							<section class="special">
								<a href="#" class="image fit"><img src="ico/bride-dress1.svg" alt="dress" /></a>
								<h3 class="h3-text">...You have to find the right dress!</h3>
								<p class="p-text">Create your perfect look can be a very long process and we want to help you to pick the right shop and the right dress. Find here all the shops around you, check their latest dresses and manage your appointments through your personal account!</p>
							</section>
						</div>
						<div class="3u">
							<section class="special">
								<a href="#" class="image fit"><img src="ico/wedding-planning.svg" alt="planning" /></a>
								<h3 class="h3-text">Save your time, use our easy tools</h3>
								<p class="p-text">You can use our app to manage all your appointments with restaurants, stylists, makeup makers and a lot more! Manage on a single account all your todo list. Don't get lost into the jungle, let us guide you!</p>
							</section>
						</div>
						<div class="3u">
							<section class="special">
								<a href="#" class="image fit"><img src="ico/wedding-invitation.svg" alt="invitation" /></a>
								<h3 class="h3-text">It's okay if we're not invited...</h3>
								<p class="p-text">Your happiness about your marriage will strongly depend on the satisfaction of your guests: nobody wants to sit with his/her ex at the table. Don't make the table organization ruin your party! Give us a list, age, sex and preferences and our system will automatically sort out the best allocation of your invite.</p>
							</section>
						</div>
					</div>
					<div class="row">
						<ul class="col-md-4 col-md-offset-5 actions">
							<li><a href="#" class="button special">Learn More</a></li>
						</ul>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style1">
				<header class="major">
					<h2 class="h2-text">Our offer</h2>
					<p class="p-text">Nubo is free, but you would love these extra features!</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="3u">
							<section class="special">
								<a href="#" class="image fit"><img src="ico/free.svg" alt="Base" /></a>
								<h3 class="h3-text">Base</h3>
								<p class="p-text">Our base package is completely free. With this first step you will be able to create your account and calcule your budget allocation, browse inside our network to discover our partners and how we succeed in our past weddings. Yes, it's free!</p>
								<h2 class="h2-text2">FREE</h2>
							</section>
						</div>
						<div class="3u">
							<section class="special">
								<a href="#" class="image fit"><img src="ico/silver.svg" alt="Silver" /></a>
								<h3 class="h3-text">Silver</h3>
								<p class="p-text">You will be able to start your adventure with us and unlock many additional services such as our agenda manager and table organization. Book your appointments directly through our website and see the advancement! Click to learn more!</p>
								<h2 class="h2-text2">25€</h2>
							</section>
						</div>
						<div class="3u">
							<section class="special">
								<a href="#" class="image fit"><img src="ico/gold.svg" alt="Gold" /></a>
								<h3 class="h3-text">Gold</h3>
								<p class="p-text">Perfect to have a wider partner network and let us guide you to the most specific things of your organization. Access our DJs, photographers, stylist and much more directly on our platform and let us help you to chose your wedding style!</p>
								<h2 class="h2-text2">40€</h2>
							</section>
						</div>
						<div class="3u">
							<section class="special">
								<a href="#" class="image fit"><img src="ico/platine.svg" alt="Platinum" /></a>
								<h3 class="h3-text">Platinum</h3>
								<p class="p-text">Get an advisor for your wedding and pay only one time to get access to all our services! Your personal advisor will follow you during all your itinerary and cover with you every step for a successful marriage. Save your time, we can help!</p>
								<h2 class="h2-text2">100€</h2>
							</section>
						</div>
					</div>
					<div class="row">
						<ul class="col-md-4 col-md-offset-5 actions">
							<li><a href="#" class="button special">Learn More</a></li>
						</ul>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 section-carousel">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
								<h2 class="h2-text">They used Nubo and they loved it!</h2>
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
						            <ol class="carousel-indicators">
						              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						              <li data-target="#myCarousel" data-slide-to="1"></li>
						              <li data-target="#myCarousel" data-slide-to="2"></li>
						              <li data-target="#myCarousel" data-slide-to="3"></li>
						            </ol>
						            <div class="carousel-inner" role="listbox">
						              <div class="item active">
						                <img src="img/wedding2.jpg" alt="Wedding pictures slideshow">
														<div class="carousel-caption">
															<p>The wedding of Julie and Lucas</p>
														</div>
						              </div>
						              <div class="item">
						                <img src="img/wedding3.jpg" alt="Wedding pictures slideshow">
														<div class="carousel-caption">
															<p>The wedding of Noemie and Gustave</p>
														</div>
						              </div>
						              <div class="item">
						                <img src="img/wedding5.jpg" alt="Wedding pictures slideshow">
														<div class="carousel-caption">
															<p>The wedding of Nat and Eliott</p>
														</div>
						              </div>
						              <div class="item">
						                <img src="img/wedding1.jpg" alt="Wedding pictures slideshow">
														<div class="carousel-caption">
															<p>The wedding of Laura and Francois</p>
														</div>
						              </div>
						            </div>
												<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
											   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
											   <span class="sr-only">Previous</span>
											  </a>
											  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
											   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
											   <span class="sr-only">Next</span>
											  </a>
						          </div>
						        </div>
						      </div>
									<div class="row">
										<p class="col-md-offset-3 col-md-6 text-center">Your wedding is the most important event in your life and is going to be unforgettable. This must be a great celebration! These couples trusted us. While striking a right balance between professional and personal life is extremely difficult, this is hard to spend your precious time by checking every available service necessary for your wedding. It's even harder to keep track of every milestone and be ready for the D day! That is why these couples decided to use Nubo, and look at their pictures, they had wonderful wedding! This is your day, be sure that everything is 100 % perfect!</p>
									</div>
								</div>
				</section>
		<!-- Footer -->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<h4 class="copyright">&copy; Nubo 2016</h4>
						<a href="#" class="icon fa-twitter col-xs-offset-7"><span class="label">Twitter</span></a>
						<a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a>
						<a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a>
						<a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a>
					</div>
				</div>
			</footer>
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/skel-layers.min.js"></script>
			<script src="js/init.js"></script>
			<script src="bootstrap/js/jquery.min.js"></script>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/smoothscroll.js"></script> 
			<script type="text/javascript">
    			document.getElementById('videoid').play();
			</script>
			<script>
				$(function() {
				  $('a[href*=#]:not([href=#]):not([href=#media])').click(function() {
				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 1000);
				        return false;
				      }
				    }
				  });
				});
			</script>
	</body>
</html>
