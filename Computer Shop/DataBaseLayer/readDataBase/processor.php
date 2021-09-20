<?php
  include '../../BusinessLayer/product class/processor_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM processor";
    $result = mysqli_query($con,$s);
    $allProcessor = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/processor/".basename($row['picture']);
        $name = "Processor ".$row["brand"];
        $model = "Desktop Processor ".$row["productid"];
        $keyFeatures = $row["clockSpeed"]." Processor\n".$row["model"];

        //echo $keyFeatures;

        $processor = new Processor($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["model"],$row["clockSpeed"],$row["core"],$row["thread"],$row["tdp"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allProcessor,$processor);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allProcessor;

  }

  function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM processor WHERE productid = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/processor/".basename($row['picture']);
        $name = "Processor ".$row["brand"]." ".$row["model"];
        $model = "Desktop Processor ".$row["productid"];
        $keyFeatures = $row["brand"]." ".$row["clockSpeed"];

        $processor = new Processor($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["model"],$row["clockSpeed"],$row["core"],$row["thread"],$row["tdp"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $processor;
  }

  

?>


