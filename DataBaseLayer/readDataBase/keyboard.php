<?php
  include '../../BusinessLayer/product class/keyboard_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM keyboard";
    $result = mysqli_query($con,$s);
    $allKeyboard = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/keyboard/".basename($row['picture']);
        $name = "Keyboard".$row["brand"];
        $model = "PC_Keyboard ".$row["keyboard_id"];
        $keyFeatures = $row["type"]." Keyboard\n".$row["interface"]. $row["switch_type"];

        //echo $keyFeatures;

        $keyboard = new Keyboard($name,$model,$keyFeatures,$row["keyboard_id"],$row["brand"],$row["type"],$row["interface"],$row["switch_type"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allKeyboard,$keyboard);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allKeyboard;

  }

function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM keyboard WHERE keyboard_id = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/keyboard/".basename($row['picture']);
        $name = "Keyboard".$row["brand"]." ".$row["type"];
        $model = "PC_Keyboard ".$row["keyboard_id"];
        $keyFeatures = $row["brand"]." ".$row["type"];

        $keyboard = new Keyboard($name,$model,$keyFeatures,$row["keyboard_id"],$row["brand"],$row["type"],$row["interface"],$row["switch_type"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $keyboard;
}
  

?>


