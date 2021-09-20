<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<?php include 'Head.php'; ?>
	
	<br><br><br><br><br><br><br>

	
	<h1>About us page!</h1>
	<?php

		$fileRead = fopen("../../BusinessLayer/Text/AboutUs.txt","r") or die("Unable to open file!");
		echo "<pre>";
		$str = fread($fileRead,filesize("../../BusinessLayer/Text/AboutUs.txt"));
		//echo "<b>";
		echo $str;
		//echo "</b>";
		echo "</pre>";
		fclose($fileRead);

	?>
	
	</body>
</html>
<br><br><br>

<?php include 'Footerv2.php';?>