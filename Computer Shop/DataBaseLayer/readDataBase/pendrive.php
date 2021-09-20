<?php
  include '../../BusinessLayer/product class/pendrive_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM pendrive";
    $result = mysqli_query($con,$s);
    $allPendrive = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/pendrive/".basename($row['picture']);
        $name = "Pendrive".$row["brand"];
        $model = "PC_Pendrive".$row["pendrive_id"];
        $keyFeatures = $row["connectivity"]."Pendrive\n".$row["capacity"];

        //echo $keyFeatures;

        $pendrive = new Pendrive($name,$model,$keyFeatures,$row["pendrive_id"],$row["brand"],$row["connectivity"],$row["capacity"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allPendrive,$pendrive);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allPendrive;

  }

function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM pendrive WHERE pendrive_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/pendrive/".basename($row['picture']);
        $name = "Pendrive".$row["brand"]." ".$row["connectivity"];
        $model = "PC_Pendrive".$row["pendrive_id"];
        $keyFeatures = $row["brand"]." ".$row["connectivity"];

        $pendrive = new Pendrive($name,$model,$keyFeatures,$row["pendrive_id"],$row["brand"],$row["connectivity"],$row["capacity"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $pendrive;
}
  

?>


