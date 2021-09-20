<?php


session_start();
$_SESSION['UserEmail']= "";

$cpu = $cpuCooler = $motherBoard = $ram1 = $ram2 = $storage1 = $storage2 = $graphicsCard = $powerSupply = $casing = $casingCooler = $monitor = $keyboard = $mouse = $headphone = $UPS = $need1 = "" ;

$need2 = 1;

$pcBuilder = array($cpu,$cpuCooler,$motherBoard,$ram1,$ram2,$storage1,$storage2,$graphicsCard,$powerSupply,$casing,$casingCooler,$monitor,$keyboard,$mouse,$headphone,$UPS);

$Text = json_encode($pcBuilder);
$RequestText = urlencode($Text);


//echo $RequestText[0];



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="../CSS/WelcomeCss.css">
</head>
<body>
	<div class="container">
		<div class="navigation">
			<!-- <img src="images/logo.png" class=""> -->
			<nav>
				<ul>
					<li><a href="StaticHome.php">HOME</a></li>
					<li><a href="AboutUs.php">ABOUT US</a></li>
					<li><a href="Contact.php">CONTACT US</a></li>
				</ul>
			</nav>
			<!-- <img src="images/menu.png" class=""> -->
		</div>

		<div class="row">
			<div class="coloumn">
				<h1>Welcome</h1>
				<p>Welcome to our world of hardwares. Explore now and Unleash your dream setup with your desired rig.</p>

				<!-- <button type="button">Explore</button> -->
			</div>

			<div class="coloumn">
				<a href="StaticHome.php" class="card card1">
					<h2>Explore</h2>
					
				</a>

				<a href="PCBuilder.php?need1=<?php echo $need1?>&need2=<?php echo $need2?>&pcc=<?php echo $RequestText?>" class="card card2">
					<h2>Build PC</h2>
					
				</a>

				<a href="Login.php" class="card card3">
					
					<h2>Login</h2>
				</a>

				<a href="Registrationv2.php" class="card card4">
					<h2>Registration</h2>		
				</a>
			</div>
		
		</div>
	</div>

<!-- #333 = dark grey -->

</body>
</html>