<?php
  include '../../BusinessLayer/product class/scanner_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM scanner";
    $result = mysqli_query($con,$s);
    $allScanner = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/scanner/".basename($row['picture']);
        $name = "Scanner ".$row["brand"];
        $model = "PC_Scanner ".$row["scanner_id"];
        $keyFeatures = $row["speed"]." Scanner\n".$row["resoulation"]. $row["connectivity"];

        //echo $keyFeatures;

        $scanner = new Scanner($name,$model,$keyFeatures,$row["scanner_id"],$row["brand"],$row["speed"],$row["resoulation"],$row["connectivity"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allScanner,$scanner);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allScanner;

  }

function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM scanner WHERE scanner_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/scanner/".basename($row['picture']);
        $name = "Scanner ".$row["brand"]." ".$row["speed"];
        $model = "PC_Scanner ".$row["scanner_id"];
        $keyFeatures = $row["brand"]." ".$row["speed"];

        $scanner = new Scanner($name,$model,$keyFeatures,$row["scanner_id"],$row["brand"],$row["speed"],$row["resoulation"],$row["connectivity"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $scanner;
}
  

?>


