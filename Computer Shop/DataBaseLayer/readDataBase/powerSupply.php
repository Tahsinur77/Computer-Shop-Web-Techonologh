<?php
  include '../../BusinessLayer/product class/powerSupply_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM powersupply";
    $result = mysqli_query($con,$s);
    $allPowerSupply = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/powersupply/".basename($row['picture']);
        $name = "Power supply".$row["brand"];
        $model = "Desktop Power Supply ".$row["productid"];
        $keyFeatures = $row["wattage"]." Graphics\n".$row["model"];

        //echo $keyFeatures;

        $powerSupply = new PowerSupply($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["wattage"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allPowerSupply,$powerSupply);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allPowerSupply;

  }

  function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM powersupply WHERE productid = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/powersupply/".basename($row['picture']);
        $name = "Power supply ".$row["brand"]." ".$row["wattage"];
        $model = "Desktop Power supply".$row["productid"];
        $keyFeatures = $row["brand"]." ".$row["wattage"];

        $powerSupply = new PowerSupply($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["wattage"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $powerSupply;
  }

  

?>


