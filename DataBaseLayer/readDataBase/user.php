<?php
  include '../../BusinessLayer/Product class/user_class.php';

  function userDetails($email){
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'computershop');
    //echo $email;
    $s = "SELECT * FROM user WHERE email = '$email'"; 
    $result = mysqli_query($con,$s);


    while ($row = mysqli_fetch_assoc($result)) {
        
        $x = "../../PresentationLayer/picture/user/".basename($row['picture']);
        
        $user = new User($row["userId"],$row["userType"],$row["name"],$row["email"],$row["phoneNumber"],$row["gender"],$row["dateOfBirth"],$row["address"],$x,$row["password"]);
    }

    $con -> close();

    return $user;
  }

  

?>


