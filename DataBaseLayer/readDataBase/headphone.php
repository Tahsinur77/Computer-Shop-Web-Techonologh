<?php
  include '../../BusinessLayer/product class/headphone_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM headphone";
    $result = mysqli_query($con,$s);
    $allHeadphone = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/headphone/".basename($row['picture']);
        $name = "Headphone ".$row["brand"];
        $model = "PC_Headphone ".$row["headphone_id"];
        $keyFeatures = $row["type"]." Headphone\n".$row["interface"]. $row["color"];

        //echo $keyFeatures;

        $headphone = new Headphone($name,$model,$keyFeatures,$row["headphone_id"],$row["brand"],$row["type"],$row["interface"],$row["color"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allHeadphone,$headphone);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allHeadphone;

  }

function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM headphone WHERE headphone_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/headphone/".basename($row['picture']);
        $name = "Headphone ".$row["brand"]." ".$row["type"];
        $model = "PC_Headphone ".$row["headphone_id"];
        $keyFeatures = $row["brand"]." ".$row["type"];

        $headphone = new Headphone($name,$model,$keyFeatures,$row["headphone_id"],$row["brand"],$row["type"],$row["interface"],$row["color"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $headphone;
}
  

?>


