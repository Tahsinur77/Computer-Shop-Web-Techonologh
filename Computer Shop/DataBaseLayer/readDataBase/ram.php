<?php
  include '../../BusinessLayer/product class/ram_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM ram";
    $result = mysqli_query($con,$s);
    $allRam = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/ram/".basename($row['picture']);
        $name = "RAM ".$row["brand"];
        $model = "Desktop RAM ".$row["productid"];
        $keyFeatures = $row["type"]." RAM\n".$row["model"];

        //echo $keyFeatures;

        $ram = new Ram($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["speed"],$row["capacity"],$row["type"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allRam,$ram);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allRam;

  }

  function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM ram WHERE productid = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/ram/".basename($row['picture']);
        $name = "RAM ".$row["brand"]." ".$row["type"];
        $model = "Desktop RAM ".$row["productid"];
        $keyFeatures = $row["brand"]." ".$row["type"];

        $ram = new Ram($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["speed"],$row["capacity"],$row["type"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $ram;
  }

  

?>


