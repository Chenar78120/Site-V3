<?php

include ('auth.php');
session_start();
if ($_POST[submit] === "Ok")
{
	if (auth($_POST['login'], $_POST['passwd']) == TRUE)
	{
		$_SESSION['loggued_on_user'] = $_POST['login'];
		header('location:control-panel.php');
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "ERROR\n";
	}
}
?><!DOCTYPE HTML>

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
		<header id="header" class="skel-layers-fixed">
			<a href="index.php"><img class="logo" src="img/logo.svg"</a>
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
		<div class="wrapper style1">
			<h2 class="h2-text1">Sign in</h2>
				<div class="row">
					<div class="col-md-offset-4 col-md-4">
						<form class="login" action="login.php" method="post">
							<input type="text" name="login" placeholder="Login name"> <br />
							<input type="password" name="passwd" placeholder="Password"> <br />
							<input class="col-md-offset-4 col-md-3 button special" type="submit" name="submit" value="Ok">
						</form>
						<div class="row">
							<h5 class="h2-text2 margin-text4">Don't have an account yet?</h5>
							<a href="dresses.html" class="margin-text">Go to the next step and create your account</a>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>
