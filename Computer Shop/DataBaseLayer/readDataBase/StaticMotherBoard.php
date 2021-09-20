<?php


include '../../BusinessLayer/product class/motherboard_class.php';

  function staticMotherBoard(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM motherboard";
    $result = mysqli_query($con,$s);
    $allMotherboard = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/motherboard/".basename($row['picture']);
        $name = "Motherboard ".$row["brand"];
        $model = "Desktop Motherboard ".$row["productid"];
        $keyFeatures = $row["type"]." Motherboard\n".$row["model"];

        //echo $keyFeatures;

        $motherboard = new Motherboard($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["type"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allMotherboard,$motherboard);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allMotherboard;

  }


?>