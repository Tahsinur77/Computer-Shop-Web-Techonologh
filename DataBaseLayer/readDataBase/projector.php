<?php
  include '../../BusinessLayer/product class/projector_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM projector";
    $result = mysqli_query($con,$s);
    $allProjector = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/projector/".basename($row['picture']);
        $name = "Projector ".$row["brand"];
        $model = "PC_Projector ".$row["projector_id"];
        $keyFeatures = $row["lumnes"]." Projector\n".$row["display_technology"]. $row["contrast_ratio"];

        //echo $keyFeatures;

        $projector = new Projector($name,$model,$keyFeatures,$row["projector_id"],$row["brand"],$row["lumnes"],$row["display_technology"],$row["contrast_ratio"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allProjector,$projector);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allProjector;

  }

function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM projector WHERE projector_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/projector/".basename($row['picture']);
        $name = "Projector ".$row["brand"]." ".$row["lumnes"];
        $model = "PC_Projector ".$row["projector_id"];
        $keyFeatures = $row["brand"]." ".$row["lumnes"];

        $projector = new Projector($name,$model,$keyFeatures,$row["projector_id"],$row["brand"],$row["lumnes"],$row["display_technology"],$row["contrast_ratio"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $projector;
}
  

?>


