<?php $ok = 1 ?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    	<style>
      *{
        padding: 0;
        margin: 0;
        font-family: "Trebuchet MS", sans-serif;
        box-sizing: border-box;
        max-width: 100%;
        /* //background-color: #333; */
      }

      .gall{
        position: absolute;
        max-width: 100%;
        
        height: 10vh;
        
        display: flex;
        float: center;
        /* #padding: 20px; */

        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        top: 12vh;

        left: 28%;
      }

      p
      {
        color: black;
        
        padding: 15px;
        
        border: none;
        cursor: pointer;
        position: relative; 
        text-decoration: none;
        margin-right: 5px;
      }

      .dropbtn {
        /* #background-color: white; */
        color: black;
        
        padding: 15px;
        
        border: none;
        cursor: pointer;
        position: relative; 
        text-decoration: none;
        margin-right: 5px;
      }

      
      .dropdown {
        position: relative;
        display: inline-block;
        
        text-align: center;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        width: 100%;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        
        text-align: left;
      }

      .dropdown-content a {
        color: black;
        padding: 12px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {background-color: #f1f1f1}

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .dropdown:hover .dropbtn {
        background-color: #282e31;
      }
      </style>
  </head>
  <body>
      <!-- <hr>
      <a href="HomePage.php">Home</a>
      <a href="AboutUs.php">About Us</a>
      <a href="Contact.php">Contact Us</a>	
      <a href="#" style="float: right;"> -->

      <div class="gall">
        <div class="dropdown">
          
          <a href="HomePage.php?one=desktop&two=<?php echo  $ok ?>">
            <button class="dropbtn">Desktop</button>
          </a>
        </div>

        <div class="dropdown">

          <a href="HomePage.php?one=laptop&two=<?php echo  $ok ?>">
            <button class="dropbtn">Laptop</button>
          </a>

        </div>

        <div class="dropdown">
          <button class="dropbtn">Component</button>
          <div class="dropdown-content">
            <a href="HomePage.php?one=processor&two=<?php echo  $ok ?>">CPU</a>
            <a href="HomePage.php?one=cooler&two=<?php echo  $ok ?>">CPU Cooler</a>
            <a href="HomePage.php?one=ssd&two=<?php echo  $ok ?>">SSD</a>
            
            <a href="HomePage.php?one=graphicsCard&two=<?php echo  $ok ?>">Graphics Card</a>
            <a href="HomePage.php?one=powerSupply&two=<?php echo  $ok ?>">Power Supply</a>
            <a href="HomePage.php?one=motherboard&two=<?php echo  $ok ?>">Motherboard</a>
            
          </div>
        </div>

        <div class="dropdown">
          <a href="HomePage.php?one=monitor&two=<?php echo  $ok ?>">
            <button class="dropbtn">Monitor</button>
          </a>
          
        </div>

        <div class="dropdown">
          <button class="dropbtn">Office Equipment</button>
          <div class="dropdown-content">
            <a href="HomePage.php?one=printer&two=<?php echo  $ok ?>">Printer</a>
            <a href="HomePage.php?one=projector&two=<?php echo  $ok ?>">Projector</a>
            <a href="HomePage.php?one=photocopier&two=<?php echo  $ok ?>">Photocopier</a>
            <a href="HomePage.php?one=scanner&two=<?php echo  $ok?>">Scanner</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Accessories</button>
          <div class="dropdown-content">
            <a href="HomePage.php?one=keyboard&two=<?php echo  $ok ?>">Keyboard</a>
            <a href="HomePage.php?one=mouse&two=<?php echo  $ok ?>">Mouse</a>
            <a href="HomePage.php?one=pendrive&two=<?php echo  $ok ?>">Pendrive</a>
            <a href="HomePage.php?one=headphone&two=<?php echo  $ok ?>">Headphone</a>
            
          </div>
        </div>
      </div>
    <hr>

    </body>
</html>