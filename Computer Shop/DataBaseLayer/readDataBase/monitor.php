<?php
  include '../../BusinessLayer/product class/monitor_class.php';

  function allProduct(){

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM monitor";
    $result = mysqli_query($con,$s);
    $allMonitor = array();
    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/monitor/".basename($row['picture']);
        $name = "Monitor".$row["brand"];
        $model = "Monitor ".$row["productid"];
        $keyFeatures = $row["refreshRate"]." Graphics\n".$row["model"];

        //echo $keyFeatures;

        $monitor = new Monitor($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["refreshRate"],$row["inputType"],$row["resulation"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
        //echo $desk->productId;
        //echo $desk->picture;
        //echo $row['$desk->picture'];
        array_push($allMonitor,$monitor);
        //echo "<br><br><br>";
    }

    $con -> close();

    return $allMonitor;

  }

  function singleProduct($id){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');

    $s = "SELECT * FROM monitor WHERE productid = $id "; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/monitor/".basename($row['picture']);
        $name = "Monitor ".$row["brand"]." ".$row["refreshRate"];
        $model = "Monitor".$row["productid"];
        $keyFeatures = $row["brand"]." ".$row["resulation"];

        $monitor = new Monitor($name,$model,$keyFeatures,$row["productid"],$row["brand"],$row["refreshRate"],$row["inputType"],$row["resulation"],$row["model"],$row["price"],$row["quantity"],$row["description"],$x);
    }

    $con -> close();

    return $monitor;
  }

  

?>


