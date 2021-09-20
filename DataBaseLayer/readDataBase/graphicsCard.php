<?php
  include '../../BusinessLayer/product class/graphicsCard_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM graphicscard";
    $result = mysqli_query($con,$s);
    $allGraphics = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/graphics/".basename($row['picture']);
        $name = "Graphics Card ".$row["brand"];
        $model = "Desktop Graphics Card ".$row["productid"];
        $keyFeatures = $row["type"]." Graphics\n".$row["model"];

        //echo $keyFeatures;

        $graphics = new Graphics($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["capacity"],$row["type"],$row["model"],$row["clockSpeed"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allGraphics,$graphics);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allGraphics;

  }

  function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM graphicscard WHERE productid = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/graphcis/".basename($row['picture']);
        $name = "Graphics ".$row["brand"]." ".$row["type"];
        $model = "Desktop Graphcis card ".$row["productid"];
        $keyFeatures = $row["brand"]." ".$row["type"];

        $graphics = new Graphics($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["capacity"],$row["type"],$row["model"],$row["clockSpeed"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $graphics;
  }

  

?>


