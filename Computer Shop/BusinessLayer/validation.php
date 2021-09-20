<?php



$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'computershop');

$email = $_POST['username'];
$pass = $_POST['password'];

echo $email;

session_start();
$_SESSION['UserEmail']= $email;


$s = "SELECT * FROM user WHERE email = '$email' && password = '$pass' " ; 

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    // session_start();
    // $_SESSION['UserEmail']= $email;
    //$_SESSION['password']= $pass;
    //echo $_SESSION['email'];
    header('location:../PresentationLayer/HTML/StaticHome.php');
}
else{
    session_destroy();
    echo "<script type='text/javascript'>alert('Wrong Password Or Email.. Try Again OR Registration');</script>";
    header('location:../PresentationLayer/HTML/Login.php');
    

}


?>