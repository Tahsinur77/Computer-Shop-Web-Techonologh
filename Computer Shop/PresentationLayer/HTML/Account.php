<!-- <?php
  session_start();
  $userEmail = $_SESSION['UserEmail'];
  //$userPass = $_SESSION['password'];


  require_once('../../DataBaseLayer/readDataBase/user.php');
  $userDetails = userDetails($userEmail);

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/AccountCSS.css">

<body style="background: #081621;">
  <section class="login">
    <div class="login_box">
      <div class="left">
        <div class="top_link"><a href="StaticHome.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download.jpg" alt="">Return home</a></div>
        <div class="contact">
          <form action="">
            <h3>ACCOUNT DETAILS</h3>
            <input type="text" placeholder="<?php echo $userDetails->name ?>">
            <input type="text" placeholder="<?php echo $userDetails->password ?>">
            <input type="text" placeholder="<?php echo $userDetails->email ?>">
            <input type="text" placeholder="<?php echo $userDetails->phoneNumber ?>">
            <input type="text" placeholder="<?php echo $userDetails->gender ?>">
            <input type="text" placeholder="<?php echo $userDetails->address ?>">
            <button class="submit">EDIT</button>
          </form>
        </div>
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
</body>
</html>
