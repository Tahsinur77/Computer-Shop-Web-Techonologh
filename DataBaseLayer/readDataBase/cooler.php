<?php
  include '../../BusinessLayer/product class/cooler_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM cooler";
    $result = mysqli_query($con,$s);
    $allCooler = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/cooler/".basename($row['picture']);
        $name = "Cooler ".$row["brand"];
        $model = "CPU Cooler ".$row["coolerId"];
        $keyFeatures = $row["type"]." Cooler\n".$row["model"];

        //echo $keyFeatures;

        $cooler = new Cooler($name,$model,$keyFeatures,$row["coolerId"],$row["brand"],$row["type"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allCooler,$cooler);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allCooler;

  }

  function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM cooler WHERE coolerId = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/cooler/".basename($row['picture']);
        $name = "Cooler ".$row["brand"]." ".$row["type"];
        $model = "CPU Cooler ".$row["coolerId"];
        $keyFeatures = $row["brand"]." ".$row["type"];

        $cooler = new Cooler($name,$model,$keyFeatures,$row["coolerId"],$row["brand"],$row["type"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $cooler;
  }

  

?>


