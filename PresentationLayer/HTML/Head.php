<?php

session_start();
$userEmail = $_SESSION['UserEmail'];
$_SESSION['UserEmail']  = $userEmail;


$account = "Account";

if($userEmail != ""){
	require_once('../../DataBaseLayer/readDataBase/user.php');
	$userDetails = userDetails($userEmail);

	$type =  $userDetails->userType;
	$link = "";
	if($type == 'Admin'){
		$link = "../../DataBaseLayer/input/adding-product.php";
	}
	$account = $userDetails->name;
	$accLink = "Account.php";
}

if($account =="Account") {
	$accLink = "Login.php";
}



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
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/HeadCss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	
	<header>
		<!-- <h1>Home</h1> -->

		<div class="head-container">
			<div class="navigation">
				<div class="logo">
					<a href="StaticHome.php"><img src="../Pictures/trozan_horse_1.png" class=""></a>
				</div>



				<!--Search Bar-->
					
				<div class="srch-container">
			      
			      <div class="search-input">
			        <a href="" target="_blank" hidden></a>
			        <input type="text" placeholder="Search">
			        
			        <div class="autocom-box">
			          <!-- here list are inserted from javascript -->
			        </div>

			        <div class="icon">
			        	<i class="fas fa-search"></i>
			        </div>

			      </div>

			    </div>

			    <script src="../../BusinessLayer/Javascript/Search-Suggestions.js"></script>
    			<script src="../../BusinessLayer/Javascript/Search-Script.js"></script>
			

				<!--Options-->


				<nav>
    			

					<ul>	
						<li><a href="Welcome.php">Home</a></li>
						<li><a href="AboutUs.php">About Us</a></li>
						<li><a href="Contact.php">Contact Us</a></li>
						
						<li>
							<i class="fas fa-user"></i>
							<a href="<?php echo $accLink  ?>"> <?php echo $account ?> </a>
						</li>
						<li><a href="PCBuilder.php?need1=<?php echo $need1?>&need2=<?php echo $need2?>&pcc=<?php echo $RequestText?>" class="button outline">PC Builder</a></li>
						
						<li><a href="<?php echo $link ?>" id = "addProductButton">Add Product</a></li>

						<li>
                <a href="Logout.php"><i class="fas fa-sign-out-alt"></i></a>
            </li>

					</ul>
				</nav>

			</div>
		</div>

	</header>

	<!--
	<section>
		<a href="Home.php" title="Home">Home</a>
		<a href="AboutUs.php" title="About Us">About Us</a>
		<a href="ContactUs.php" title="Contact Us">Contact Us</a>
		<a href="#" style="float: right;"><?php echo "Date: ".date("d-m-y");?></a>
	-->
</body>
</html>