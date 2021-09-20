<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title style="color: black;">Registration</title>
  <link rel="stylesheet" href="../CSS/Registrationv2.css">
</head>
<body>

<?php

error_reporting (E_ALL ^ E_WARNING);  //remove all the warning 
error_reporting (E_ALL ^ E_NOTICE);  //remove all the warning 
$fname = $lname = "";
$fNameErr = $lNameErr = "";
$email = $emailErr = "";
$gender = $genderErr = "";
$phone = $phoneNumberErr = "";
$birth = $birthErr = "";
$pic = $fileToUpload = "";
$address = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){


if (empty($_POST["fname"])) {
$fNameErr = "First Name Required";
} 
else {
  $fname = validateInpute($_POST["fname"]);
  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
    $fNameErr = "Only letters & space";
  }
  else $fname = validateInpute($_POST["fname"]);
}



if (empty($_POST["lname"])) {
$lNameErr = "Last Name Required";
} 
else {
  $lname = validateInpute($_POST["lname"]);
  if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
    $lNameErr = "Only Letters & Space";
  }
  else
   $lname = validateInpute($_POST["lname"]);
}



if(empty($_POST["email"])){
    $emailErr = "Email Required";
}
else{
  $email = validateInpute($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid Email Format";
  }
  else
    $email = validateInpute($_POST["email"]);
}



if(empty($_POST["phone"])){
  $phoneNumberErr = "Phone Number Required";
}
elseif(isValidTelephoneNumber(strval($_POST["phone"]))){
  $phone = validateInpute($_POST["phone"]);
}
else{
  $phoneNumberErr = "Invalid Phone Number";
}



if(empty($_POST["gender"])){
    $genderErr = "Gender Required";
}
else{
    $gender = validateInpute($_POST["gender"]);
}


if(empty($_POST["birth"])){
  $birthErr = "Birthday Required";
}
else{
  $birth = validateInpute($_POST["birth"]);
}


if(empty($_POST["address"])){
}
else{
  $birth = validateInpute($_POST["address"]);
}


if(!empty($_POST["remember"])) {
	setcookie ("fname",$_POST["fname"],time()+ (86400*30));
  setcookie ("lname",$_POST["lname"],time()+ (86400*30));
  setcookie ("email",$_POST["email"],time()+ (86400*30));
  setcookie ("phone",$_POST["phone"],time()+ (86400*30));
  setcookie ("address",$_POST["address"],time()+ (86400*30));
} 
else {
	setcookie ("fname","");
  setcookie ("lname","");
  setcookie ("email","");
  setcookie ("phone","");
  setcookie ("address","");
}


}


function validateInpute($data){
$data = trim($data); 
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

function isValidTelephoneNumber(string $telephone, int $minDigits = 9, int $maxDigits = 14): bool {
  if (preg_match('/^[+][0-9]/', $telephone)) { //is the first character + followed by a digit
      $count = 1;
      $telephone = str_replace(['+'], '', $telephone, $count); //remove +
  }
  
  //remove white space, dots, hyphens and brackets
  $telephone = str_replace([' ', '.', '-', '(', ')'], '', $telephone); 

  //are we left with digits only?
  return isDigits($telephone, $minDigits, $maxDigits); 
}
function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool {
  return preg_match('/^[0-9]{'.$minDigits.','.$maxDigits.'}\z/', $s);
}

?>

<section class="login">
  <div class="login_box">
    <div class="left">
      
    <!--form action="" enctype="multipart/form-data" method="POST-->
    <form action="../../DataBaseLayer/inputDataBase/userDB.php" method="post" enctype="multipart/form-data">
  
    <!-- <legend class = "fn">First Name</legend> -->
    <input class="fin" type="text" id = "fname" name = "fname" placeholder = "First Name" value="<?php if(isset($_COOKIE["fname"])) { echo $_COOKIE["fname"]; } ?>">
    <!-- <span class="error1">* <?php echo $fNameErr;?></span> -->
  
  
  
    <!-- <legend class = "ln">Last Name</legend> -->
    <input class="lin" type="text" id = "lname" name = "lname" placeholder = "Last Name" value="<?php if(isset($_COOKIE["lname"])) { echo $_COOKIE["lname"]; } ?>">
    <!-- <span class="error2">* <?php echo $lNameErr;?></span> -->
  
  
    <!-- <legend class = "email">Email</legend> -->
    <input class="emailin" type="email" id = "email" name = "email" placeholder = "Email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>">
    <!-- <span class="error3">* <?php echo $emailErr;?></span> -->


    
    <input type="password" class="pass" type="text" id = "password" name="password" placeholder = "Password" >
    


  
    <!-- <legend class = "phone"></legend> -->
    <input class="phonein" type="text" id = "phone" name = "phone" placeholder = "Phone number" value="<?php if(isset($_COOKIE["phone"])) { echo $_COOKIE["phone"]; } ?>">
    <!-- <span class="error4">* <?php echo $phoneNumberErr;?></span> -->
  
  
  
    <div class = "gender">
      <!-- <label>Gender: </label> -->
  
      <input type="radio" name="gender" value = "Male">
      <label>Male</label>
  
      <input type="radio" name="gender" value = "Female">
      <label>Female</label>
    </div>
    <!-- <span class="error5">* <?php echo $genderErr;?></span> -->
  
  
  
    <div class = "birth">
      <legend>Date Of Birth</legend>
      <input type="date" id = "birth" name = "birth">
    </div>
    <!-- <span class="error6">* <?php echo $birthErr;?></span> -->
  
  
    <div class = "address">
  
        <legend>Address</legend>
        <textarea rows = "5" cols = "23" name = "address" placeholder = "Enter Address" value="<?php if(isset($_COOKIE["address"])) { echo $_COOKIE["address"]; } ?>" required ></textarea><br>
  
    </div>
  
  
  
  
    <!--input type="file" name="fileToUpload" id="fileToUpload"-->
    <div class = "picture" >
          <img id="output" style = "width: 160px; height:160px"/><br>
          <legend>Upload Your Picture:</legend>
          <input class="sfont" type="file" name = "pic" id = "pic" accept="image/*" onchange="loadFile(event)"/>
          <!-- <input class="sfont" type="file" name="pic" id="fileToUpload" value=""><br><br><br> -->
  
          <!-- <?php
            $ImageName = $_FILES['pic']['name'];
            $fileElementName = 'pic';
            $path = 'picture\cooler';
            $location = $path . $_FILES['pic']['name'];
            move_uploaded_file($_FILES['pic']['tmp_name'], $location);
          ?> -->
          <!--img src="<?php echo $ImageName; ?>" alt="" title="<?php echo $ImageName; ?>" width="150" height="150" /-->
  
    </div>
  
  
    <input type="submit" class = "button1" name = "insert" id = "insert" value="Submit">
    <!-- <a href="Login.php">
      <input class = "button1" type="submit" name="submit">
    </a> -->
  
  
  
  
    </from>
  
    </div>
    <div class="right">
          <div class="right-text">
            <h2>TROJAN HORSE</h2>
            <h5>TECH & Engineering Ltd</h5>
          </div>
          <div class="right-inductor"></div>
    </div>
  </div>
</section>
<!-- <?php include 'Footer.php'; //Attaching Footer to this page ?> -->
</body>
</html>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>