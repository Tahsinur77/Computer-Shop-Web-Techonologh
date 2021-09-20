<?php

include '../../BusinessLayer/product class/laptop_class.php';
function staticLaptop(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM laptop";
    $result = mysqli_query($con,$s);
    $allLaptop = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/laptop/".basename($row['picture']);
        $name = "Laptop ".$row["brand"]." ".$row["processorType"];
        $model = "Laptop  ".$row["productID"];
        $keyFeatures = $row["brand"]." ".$row["screenSize"]." Screen\n".$row["resulation"]." Resulation ".$row["ramCapacity"]."\n".$row["HardDiskCapacity"]." ".$row["HardDiskSpeed"]." RAM + ".$row["ssdCapacity"]." SSD";

       // echo $x;

        $laptop = new Laptop($name,$model,$keyFeatures,$row["productID"],$row["brand"],$row["processorBrand"],$row["processorType"],$row["clockSpeed"],$row["noOfCore"],$row["noOfThread"],$row["screenSize"],$row["resulation"],$row["ramBusSpeed"],$row["ramCapacity"],$row["ramType"],$row["GraphicsCardType"],$row["GraphicsCardCapacity"],$row["GraphicsCardMemoryType"],$row["HardDiskCapacity"],$row["HardDiskSpeed"],$row["HardDiskFormFactor"],$row["ssdCapacity"],$row["ssdFormFactor"],$row["laptopModel"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allLaptop,$laptop);
        //echo "<br><br><br>";
       
    }

    $con -> close();

    return $allLaptop;

  }




?>