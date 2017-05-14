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
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>
		<div class="container">
			 <ul class="progressbar">
				 <li class="active">dresses</li>
				 <li class="active">venues</li>
				 <li class="active">budget</li>
				 <li>wedding!</li>
		 	</ul>
		</div>
		<div class="container">
			<div class="wrapper style1">
				<div class="row">
					<div class="col-md-5 col-md-offset-4">
						<h2 class="h2-text">Your budget:
<?php
	if (isset($_POST['submit']) && $_POST['submit'] && $_POST['budget'] != '0' && is_numeric($_POST['budget']))
	{
		echo $_POST['budget'].'$';
	}
?></h2>
<?php
	if (!isset($_POST['submit']) || !$_POST['submit'] || $_POST['budget'] == '0' || !is_numeric($_POST['budget']))
	{
?>
						<form action="" method="post">
							<input name="submit" type="submit" value="Ok" style="float: right; background-color: #0D3C5E;">
						<div style="overflow: hidden; padding-right: .5em;">
							<input name="budget" type="text" placeholder="Enter your budget">
						</form>
						</div>
					</div>
				</div>
<?php
	}
?>
				<div class="row">
					<div class="center-block" id="pieChart"></div>
				</div>
<?php
	if ($_POST['submit'] == "Ok" && $_POST['budget'] != '0' && is_numeric($_POST['budget']))
	{
?>
				<div class="text-center pagination-centered">
					<ul>
						<li><a href="create.php" class="button special">Looks good!</a></li>
					</ul>
				</div>
			</div>
		</div>
		<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
		<script src="js/d3pie.min.js" charset="utf-8"></script>
		<script>
			var pie = new d3pie("pieChart", {
				"header": {
					"title": {
						"text": "This is your budget",
						"fontSize": 24,
						"font": "paris"
					},
					"subtitle": {
						"color": "#999999",
						"fontSize": 12,
						"font": "open sans"
					},
					"location": "pie-center",
					"titleSubtitlePadding": 9
				},
				"footer": {
					"color": "#999999",
					"fontSize": 10,
					"font": "open sans",
					"location": "bottom-left"
				},
				"size": {
					"canvasHeight": 750,
					"canvasWidth": 800,
					"pieInnerRadius": "82%",
					"pieOuterRadius": "82%"
				},
				"data": {
					"sortOrder": "value-desc",
					"content": [
						{
							"label": "Dress",
							"value": 80000,
							"color": "#ff6666"
						},
						{
							"label": "Caterer",
							"value": 50000,
							"color": "#8fdaff"
						},
						{
							"label": "Beauty",
							"value": 45000,
							"color": "#abffd4"
						},
						{
							"label": "Place",
							"value": 120000,
							"color": "#dcc5ff"
						},
						{
							"label": "Photographer",
							"value": 15000,
							"color": "#c2fffd"
						},
						{
							"label": "Music",
							"value": 15000,
							"color": "#344152"
						},
						{
							"label": "Decoration",
							"value": 35000,
							"color": "#bb83b4"
						},
						{
							"label": "Rings",
							"value": 50000,
							"color": "#a4a4a4"
						},
						{
							"label": "Honeymoon",
							"value": 95002,
							"color": "#87ff90"
						},
						{
							"label": "Animation",
							"value": 78327,
							"color": "#98b5dc"
						}
					]
				},
				"labels": {
					"outer": {
						"pieDistance": 25
					},
					"inner": {
						"hideWhenLessThanPercentage": 3
					},
					"mainLabel": {
						"color": "#0c3c5e",
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
					"pullOutSegmentOnClick": {
						"effect": "linear",
						"speed": 400,
						"size": 8
					}
				},
				"misc": {
					"gradient": {
						"enabled": true,
						"percentage": 100,
						"color": "#0c3c5e"
					}
				},
				"callbacks": {}
			});
</script>
<?php
}
?>
<script src="js/d3pie.min.js" charset="utf-8"></script>
	</body>
</html>
