<?php


include '../../BusinessLayer/product class/mouse_class.php';

  function staticMouse(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM mouse";
    $result = mysqli_query($con,$s);
    $allMouse = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/mouse/".basename($row['picture']);
        $name = "Mouse ".$row["brand"];
        $model = "PC_Mouse ".$row["mouse_id"];
        $keyFeatures = $row["type"]." Mouse\n".$row["interface"]. $row["mouse_number_of_keys"];

        //echo $keyFeatures;

        $mouse = new Mouse($name,$model,$keyFeatures,$row["brand"],$row["mouse_id"],$row["type"],$row["interface"],$row["mouse_number_of_keys"],$row["model_no"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allMouse,$mouse);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allMouse;

  }



?>