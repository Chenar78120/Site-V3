<?PHP
session_start();
if ($_POST['submit'] == "Ok")
{
	if (!$_POST['login'] || !$_POST['passwd'] || $_POST['login'] === "login" || $_POST['passwd'] === "password"
	|| !$_POST['family_name']  || $_POST['family_name'] == "Name" || !$_POST['first_name'] || $_POST['first_name'] == "First name" || !$_POST['date_wedding'] || $_POST['date_wedding'] == "Wedding date" || !$_POST['email'] || $_POST['email'] == "Email" || $_POST['passwd'] != $_POST['passwdn'])
	{
		if ($_POST['passwd'] != $_POST['passwdn'])
			echo "Passwords don't match, please type it again.";
		else
			echo "Please fill all required fields.";
	}
	else
	{

		$date = $_POST['date_wedding'];
		$email = $_POST['email'];
		$name = $_POST['family_name'];
		$first_name = $_POST['first_name'];
		$login = ($_POST['login']);
		$pass = hash('whirlpool', $_POST['passwd']);
		$account = array("login" => $login, "passwd" => $pass, "family_name" => $name, "first_name" => $first_name, "email" => $email, "wedding_date" => $date);
		$all = unserialize(file_get_contents("database/users.db"));
		foreach ($all as $elem)
		{
			if($elem['login'] === $login)
			{
				header('refresh:2, url=create.php');
				echo "This username is already taken.";
				exit;
			}
		}
		$all []= $account;
		$all = serialize($all);
		file_put_contents("database/users.db", $all);
		$_SESSION['loggued_on_user'] = $_POST['login'];
   		header('location:control-panel.php');
	}
}
?><!DOCTYPE HTML>

<html>
	<head>
		<title>Your personal wedding organizer, weddings - Nubo</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="expires" content="fri, 28 Apr 2017">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
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
				 <li class="active">wedding!</li>
		 	</ul>
		</div>
		<div class="wrapper style1">
			<h2 class="h2-text">Last but not least... The happy couple!</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-1">
						<h2 class="h2-text1">The Bride</h2>
						<form class="login" action="create.php" method="post">
							<input type="text" name="family_name" placeholder="Name"> <br />
							<input type="text" name="first_name" placeholder="First name"> <br />
							<input type="text" name="login" placeholder="User login"> <br />
							<input type="email" name="email" placeholder="Email"> <br />
							<input type="text" name="date_wedding" placeholder="Wedding date"> <br />
					</div>
					<div class="col-md-5">
						<h2 class="h2-text1">The Groom</h2>
						<input type="text" name="family_name" placeholder="Name"> <br />
						<input type="text" name="first_name" placeholder="First name"> <br />
						<input type="password" name="passwd" placeholder="Password"> <br />
						<input type="password" name="passwdn" placeholder="Repeat the password"> <br />
						<input class="col-md-3" type="submit" name="submit" value="Ok" style="background-color: #0D3C5E;">
					</div>
					</form>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
	</body>
</html>
