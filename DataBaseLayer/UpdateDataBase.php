<?php

  $pageName = $_GET['addOk1'];
  $id = $_GET['addOk2'] ;
  $updateQuantity = $_GET['addOk3'];


  echo $pageName;
  echo $id;
  echo $updateQuantity;

  $con = mysqli_connect("localhost","root","");
  mysqli_select_db($con,'computershop');

  if($pageName == "desktop.php"){
    $s = "UPDATE desktop SET quantity = '$updateQuantity' WHERE product_id = $id"; 
  }
  else if($pageName == "cooler.php"){
    $s = "UPDATE cooler SET quantity = '$updateQuantity' WHERE coolerId = $id"; 
  }
  else if($pageName == "graphicsCard.php"){
    $s = "UPDATE graphicscard SET quantity = '$updateQuantity' WHERE productid = $id"; 
  }
  else if($pageName == "headphone.php"){
    $s = "UPDATE headphone SET quantity = '$updateQuantity' WHERE headphone_id = $id"; 
  }
  else if($pageName == "laptop.php"){
    $s = "UPDATE laptop SET quantity = '$updateQuantity' WHERE productID = $id"; 
  }
  else if($pageName == "keyboard.php"){
    $s = "UPDATE keyboard SET quantity = '$updateQuantity' WHERE keyboard_id = $id"; 
  }
  else if($pageName == "monitor.php"){
    $s = "UPDATE monitor SET quantity = '$updateQuantity' WHERE productid = $id"; 
  }
  else if($pageName == "motherboard.php"){
    $s = "UPDATE motherboard SET quantity = '$updateQuantity' WHERE productid = $id"; 
  }
  else if($pageName == "mouse.php"){
    $s = "UPDATE mouse SET quantity = '$updateQuantity' WHERE mouse_id = $id"; 
  }
  else if($pageName == "pendrive.php"){
    $s = "UPDATE pendrive SET quantity = '$updateQuantity' WHERE pendrive_id = $id"; 
  }
  else if($pageName == "photocopier.php"){
    $s = "UPDATE photocopier SET quantity = '$updateQuantity' WHERE photocopier_id = $id"; 
  }
  else if($pageName == "powerSupply.php"){
    $s = "UPDATE powersupply SET quantity = '$updateQuantity' WHERE productid = $id"; 
  }
  else if($pageName == "printer.php"){
    $s = "UPDATE printer SET quantity = '$updateQuantity' WHERE printer_id = $id"; 
  }
  else if($pageName == "processor.php"){
    $s = "UPDATE processor SET quantity = '$updateQuantity' WHERE processorid = $id"; 
  }

  else if($pageName == "projector.php"){
    $s = "UPDATE projector SET quantity = '$updateQuantity' WHERE projector_id = $id"; 
  }
  else if($pageName == "ram.php"){
    $s = "UPDATE ram SET quantity = '$updateQuantity' WHERE productid = $id"; 
  }
  else if($pageName == "scanner.php"){
    $s = "UPDATE scanner SET quantity = '$updateQuantity' WHERE scanner_id = $id"; 
  }
  else if($pageName == "ssd.php"){
    $s = "UPDATE ssd SET quantity = '$updateQuantity' WHERE ssd_id = $id"; 
  }
  

  $result = mysqli_query($con,$s);

  $con -> close();


?>
