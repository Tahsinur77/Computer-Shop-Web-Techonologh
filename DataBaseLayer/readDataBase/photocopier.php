<?php
  include '../../BusinessLayer/product class/photocopier_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM photocopier";
    $result = mysqli_query($con,$s);
    $allPhotocopier = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/photocopier/".basename($row['picture']);
        $name = "Photocopier ".$row["brand"];
        $model = "PC_Photocopier ".$row["photocopier_id"];
        $keyFeatures = $row["speed"]." Photocopier\n".$row["interface"]. $row["paper_size"];

        //echo $keyFeatures;

        $photocopier = new Photocopier($name,$model,$keyFeatures,$row["photocopier_id"],$row["brand"],$row["speed"],$row["interface"],$row["paper_size"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allPhotocopier,$photocopier);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allPhotocopier;

  }

function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM photocopier WHERE photocopier_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/photocopier/".basename($row['picture']);
        $name = "Photocopier ".$row["brand"]." ".$row["speed"];
        $model = "PC_Photocopier ".$row["photocopier_id"];
        $keyFeatures = $row["brand"]." ".$row["speed"];

        $photocopier = new Photocopier($name,$model,$keyFeatures,$row["photocopier_id"],$row["brand"],$row["speed"],$row["interface"],$row["paper_size"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $photocopier;
}
  

?>


