<?php
  include '../../BusinessLayer/product class/ssd_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM ssd";
    $result = mysqli_query($con,$s);
    $allSsd = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/ssd/".basename($row['picture']);
        $name = "Ssd ".$row["brand"];
        $model = "PC_Ssd ".$row["ssd_id"];
        $keyFeatures = $row["speed"]." Ssd\n".$row["capacity"]. $row["write_speed"];

        //echo $keyFeatures;

        $ssd = new Ssd($name,$model,$keyFeatures,$row["ssd_id"],$row["brand"],$row["speed"],$row["capacity"],$row["write_speed"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allSsd,$ssd);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allSsd;

  }

function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM ssd WHERE ssd_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/ssd/".basename($row['picture']);
        $name = "Ssd ".$row["brand"]." ".$row["speed"];
        $model = "PC_Ssd ".$row["ssd_id"];
        $keyFeatures = $row["brand"]." ".$row["speed"];

        $ssd = new Ssd($name,$model,$keyFeatures,$row["ssd_id"],$row["brand"],$row["speed"],$row["capacity"],$row["write_speed"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $ssd;
}
  

?>


