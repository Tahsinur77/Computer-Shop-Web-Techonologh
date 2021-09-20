<?php
  include '../../BusinessLayer/product class/printer_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM printer";
    $result = mysqli_query($con,$s);
    $allPrinter = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/printer/".basename($row['picture']);
        $name = "Printer ".$row["brand"];
        $model = "PC_Printer ".$row["printer_id"];
        $keyFeatures = $row["speed"]." Printer\n".$row["interface"]. $row["paper_size"];

        //echo $keyFeatures;

        $printer = new Printer($name,$model,$keyFeatures,$row["printer_id"],$row["brand"],$row["speed"],$row["interface"],$row["paper_size"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allPrinter,$printer);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allPrinter;

  }

function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM printer WHERE printer_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/printer/".basename($row['picture']);
        $name = "Printer ".$row["brand"]." ".$row["speed"];
        $model = "PC_Printer ".$row["printer_id"];
        $keyFeatures = $row["brand"]." ".$row["speed"];

        $printer = new Printer($name,$model,$keyFeatures,$row["printer_id"],$row["brand"],$row["speed"],$row["interface"],$row["paper_size"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $printer;
}
  

?>


