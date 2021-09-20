<?php
  include '../../BusinessLayer/product class/desktop_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM desktop";
    $result = mysqli_query($con,$s);
    $allDesktop = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/desktop/".basename($row['picture']);
        $name = "Desktop ".$row["brand"]." ".$row["processorType"];
        $model = "Desktop PC ".$row["product_id"];
        $keyFeatures = $row["brand"]." ".$row["processorType"]." Processor\n".$row["motherboardFormFactor"]." Motherboard of ".$row["motherboardBrand"]."\n".$row["hddCapacity"]." ".$row["hddSpeed"]." RAM + ".$row["ssdCapacity"]." SSD";

        //echo $keyFeatures;

        $desk = new Desktop($name,$model,$keyFeatures,$row["product_id"],$row["brand"],$row["processorType"],$row["clockSpeed"],$row["noOfCore"],$row["noOfThread"],$row["ramBrand"],$row["ramBusSpeed"],$row["ramCapacity"],$row["ramType"],$row["casingBrand"],$row["casingType"],$row["powerSupplyBrand"],$row["powerSupplyWattage"],$row["motherboardBrand"],$row["motherboardFormFactor"],$row["graphicsCardBrand"],$row["graphicsCardCapacity"],$row["graphicsCardMemoryType"],$row["hddBrand"],$row["hddCapacity"],$row["hddSpeed"],$row["hddFormFactor"],$row["ssdBrand"],$row["ssdCapacity"],$row["ssdFormFactor"],$row["coolerBrand"],$row["coolerType"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allDesktop,$desk);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allDesktop;

  }





  function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM desktop WHERE product_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/desktop/".basename($row['picture']);
        $name = "Desktop ".$row["brand"]." ".$row["processorType"];
        $model = "Desktop PC ".$row["product_id"];
        $keyFeatures = $row["brand"]." ".$row["processorType"]." Processor<br>".$row["motherboardFormFactor"]." Motherboard of ".$row["motherboardBrand"]."<br>".$row["hddCapacity"]." ".$row["hddSpeed"]." RAM + ".$row["ssdCapacity"]." SSD";

        $desk = new Desktop($name,$model,$keyFeatures,$row["product_id"],$row["brand"],$row["processorType"],$row["clockSpeed"],$row["noOfCore"],$row["noOfThread"],$row["ramBrand"],$row["ramBusSpeed"],$row["ramCapacity"],$row["ramType"],$row["casingBrand"],$row["casingType"],$row["powerSupplyBrand"],$row["powerSupplyWattage"],$row["motherboardBrand"],$row["motherboardFormFactor"],$row["graphicsCardBrand"],$row["graphicsCardCapacity"],$row["graphicsCardMemoryType"],$row["hddBrand"],$row["hddCapacity"],$row["hddSpeed"],$row["hddFormFactor"],$row["ssdBrand"],$row["ssdCapacity"],$row["ssdFormFactor"],$row["coolerBrand"],$row["coolerType"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $desk;
  }

  

?>


