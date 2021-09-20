<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php include 'Head.php';?>
	
	<br><br><br><br><br><br>
	
	<h1>Contact Us Page</h1>
	<?php 

		$fileRead = fopen("../../BusinessLayer/Text/contactUs.txt","r") or die("Unable to open file!");
		echo "<pre>";
		$str = fread($fileRead,filesize("../../BusinessLayer/Text/contactUs.txt"));
		echo $str;
		echo "</pre>";
		fclose($fileRead);

	?>

	<?php include 'Footerv2.php';?>

	</body>
</html>