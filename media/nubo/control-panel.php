<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Your personal wedding organizer, weddings - Nubo</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.0/fullcalendar.css' />
		<link rel='stylesheet' href='lib/cupertino/jquery-ui.min.css' />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top" style="background-color:#f8f8ff;">
​
		<!-- Header --> 
			<header id="header" class="skel-layers-fixed nav-panel">
				<a href="index.php"><img class="logo-panel" src="img/logo.svg"</a>
				<nav id="nav">
					<ul class="navbar-right">
						<li><a href="#" class="button alt log-button"><?php echo 'Hi '.$_SESSION['loggued_on_user'].'!'; ?></a></li>
						<li><a href="logout.php" class="button special disconnect-button">Disconnect</a></li>
					</ul>
					<div class="progress">
					    <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
					        <span class=" sr-only progress-text">15%</span>
					    </div>
					</div>
				</nav>
			</header>
​
		<!-- Banner -->
			<section id="wrapper style1">
				<div class="inner">
					<h2 class="text-center panel-title">Welcome to your control panel</h2>
				</div>
			</section>
​
		<!-- One -->
			<section id="one" class="wrapper style3">
				<div class="container">
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1 nubo border wrapper style1">
								<div class="col-xs-12">
										<h3 class="margin-text2 h2-text2">Over 22.000 vendors</h3>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/wedding-reception.svg" alt="Find a caterer" title="Catering" /></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/video-camera.svg" alt="Find a photographer" title="Photographer"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/love-song.svg" alt="Music/DJ" title="Music/DJ"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/wedding-invitation.svg" alt="Invitations" title="Invitations"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/rose.svg" alt="Flowers" title="Flowers"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/suit.svg" alt="Suits" title="Suits"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/wedding-cake.svg" alt="Wedding cakes" title="Wedding cakes"/></a>
								</div>
								<div class="col-xs-12">
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/balloons.svg" alt="Decoration" title="Decoration"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/double-bed.svg" alt="Hotels" title="Hotels"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/wedding-arch.svg" alt="Venues" title="Venues"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/shoe.svg" alt="Shoes" title="Shoes for her"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/shoe-1.svg" alt="Shoes" title="Shoes for him"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/bride-dress.svg" alt="Dresses" title="Dresses"/></a>
										<a href="#" class="col-xs-1 ico-panel"><img src="ico/diamond-ring.svg" alt="Rings" title="Rings"/></a>
								</div>
								<div class="span12">
									<span class="white-hidden">.</span>
									<h3 class="h2-text2 margin-text2 overline">Our recommandation</h3>
									<div>
										<img class="img-panel" src="img/venue.jpg" title="Our recommandation" alt="Our recommandation">
										<div class="text-panel h2-text2 col-md-6">
											<span class="margin-text">Maximum capacity: 1200 people</span><br />
											<span class="margin-text">Where: Near Los Angeles, CA, USA</span><br />
											<span class="margin-text">Overnight stay: Yes, 60 beds</span><br />
											<span class="margin-text">Price: 5400$</span><br /><br />
											<ul class="col-md-4 actions">
												<li><a href="#" class="button special">Learn More</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="span8">
									<h3 class="overline margin-text3 h2-text2">Your budget</h3>
									<div id="pieChart" class="pie-chart"></div>
									<span class="float-right">April 17th - Pronuptia - 4765$</span><br />
									<span class="float-right">April 19th - Hermes - 3700$</span><br />
								</div>
						</div>
						<div class="col-xs-5 nubo border h2-text2 wrapper style1">
							<h3 class="h2-text2 margin-text2">Your appointments</h3>
							<span class="margin-text">Where: <span class="tap-space">19 avenue de l'Opera - 75001 Paris</span></span><br />
							<span class="margin-text">When: <span class="tap-space">Today at 6:35pm</span></span><br />
							<span class="margin-text underline-grey">Vendor:<span class="tap-space">Agnes Szabelewski / Wedding dresses</span></span><br />
							<span class="margin-text">Where: <span class="tap-space">27 rue de Paradis - 75009 Paris</span></span><br />
							<span class="margin-text">When: <span class="tap-space">Thursday 19th at 7:30pm</span></span><br />
							<span class="margin-text underline-grey">Vendor:<span class="tap-space">Lana Marks / Clothes, shoes, accessories</span></span><br />
							<span class="margin-text">Where: <span class="tap-space">128 avenue des Champs Elys&eacute;es - Paris</span></span><br />
							<span class="margin-text">When: <span class="tap-space">Tomorrow at 2:30pm</span></span><br />
							<span class="margin-text underline-grey">Vendor:<span class="tap-space">Herm&egrave;s / Clothes, shoes, accessories</span></span><br />
							<span class="margin-text">Where: <span class="tap-space">1 Place du Trocad&eacute;ro - Paris</span></span><br />
							<span class="margin-text">When: <span class="tap-space">Saturday 21st at 6:30pm</span></span><br />
							<span class="margin-text">Vendor:<span class="tap-space">Chanel / Clothes, shoes, accessories</span></span><br />
							<div id="container">
								<h3 class="overline2 h2-text2 margin-text4">Your agenda</h3>
								<div id='calendar' class="calender-size"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<script src="js/jquery.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/skel-layers.min.js"></script>
			<script src="js/init.js"></script>
			<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.0/fullcalendar.min.js'></script>
			<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
			<script src="js/d3pie.min.js"></script>
			<script>
			$(document).ready(function() {
			  // page is ready
			  $('#calendar').fullCalendar({
			  // calendar properties
					contentHeight: 422,
					// emphasizes business hours
					businessHours: true,
						// event dragging & resizing
						editable: true,
							// header
							header: {
							  left: 'prev,next today',
							  center: 'title',
							  right: 'month,agendaWeek,agendaDay'
							},
							eventLimit: true, // allow "more" link when too many events
							events: [
								{
									title: 'Lana Marks',
									start: '2016-05-19'
								},
								{
									title: 'Agnes Szabelewski',
									start: '2016-05-17'
								},
								{
									title: 'Visiting wedding venues',
									start: '2016-05-07',
									end: '2016-05-10'
								},
								{
									title: 'Hermes',
									start: '2016-05-18',
									end: '2016-05-19'
								},
								{
									title: 'Chanel',
									start: '2016-05-21T06:30:00',
									end: '2016-05-21T07:30:00'
								},
								{
									title: 'Shops',
									start: '2016-05-28'
								}
							]
			  	})
				});
			</script>
		<script>
		var pie = new d3pie("pieChart", {
			"header": {
				"title": {
					"fontSize": 24,
					"font": "open sans"
				},
				"subtitle": {
					"color": "#999999",
					"fontSize": 12,
					"font": "open sans"
				},
				"titleSubtitlePadding": 9
			},
			"footer": {
				"color": "#999999",
				"fontSize": 10,
				"font": "open sans",
				"location": "bottom-left"
			},
			"size": {
				"canvasWidth": 590,
				"pieInnerRadius": "74%",
				"pieOuterRadius": "64%"
			},
			"data": {
				"sortOrder": "value-asc",
				"content": [
					{
						"label": "Pronuptia",
						"value": 2500,
						"color": "#8deca0"
					},
					{
						"label": "Hermès",
						"value": 2500,
						"color": "#ff7777"
					},
					{
						"label": "",
						"value": 15000,
						"color": "#ffffff"
					}
				]
			},
			"labels": {
				"outer": {
					"pieDistance": 4
				},
				"inner": {
					"format": "none",
					"hideWhenLessThanPercentage": 3
				},
				"mainLabel": {
					"fontSize": 11
				},
				"percentage": {
					"color": "#ffffff",
					"decimalPlaces": 0
				},
				"value": {
					"color": "#adadad",
					"fontSize": 11
				},
				"lines": {
					"enabled": true
				},
				"truncation": {
					"enabled": true
				}
			},
			"effects": {
				"load": {
					"speed": 1500
				},
				"pullOutSegmentOnClick": {
					"effect": "linear",
					"speed": 400,
					"size": 8
				}
			},
			"misc": {
				"gradient": {
					"enabled": true,
					"percentage": 100
				}
			}
		});
		</script>
	</body>
</html>
