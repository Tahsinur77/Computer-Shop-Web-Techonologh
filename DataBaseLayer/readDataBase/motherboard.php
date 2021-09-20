<?php
  include '../../BusinessLayer/product class/motherboard_class.php';

  function allProduct(){

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

  function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM motherboard WHERE productid = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/motherboard/".basename($row['picture']);
        $name = "Motherboard ".$row["brand"]." ".$row["type"];
        $model = "Desktop Motherboard ".$row["productid"];
        $keyFeatures = $row["brand"]." ".$row["type"];

        $motherboard = new Motherboard($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["type"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $motherboard;
  }

  

?>


