<?php



$id0 = $pic0 = $name0 = $price0 = $id1 = $pic1 = $name1 = $price1 = $id2 = $pic2 = $name2 = $price2 = $id3 = $pic3 = $name3 = $price3 = $id4 = $pic4 = $name4 = $price4 = $id5 = $pic5 = $name5 = $price5 = $id6 = $pic6 = $name6 = $price6 = $id7 = $pic7 = $name7 = $price7 = $id8 = $pic8 = $name8 = $price8 = $id9 = $pic9 = $name9 = $price9 = $id10 = $pic10 = $name10 = $price10 = $id11 = $pic11 = $name11 = $price11 = $id12 = $pic12 = $name12 = $price12 = $id13 = $pic13 = $name13 = $price13 = $id14 = $pic14 = $name14 = $price14 = $id15 = $pic15 = $name15 = $price15 = $id16 = $pic16 = $name16 = $price16 = $id17 = $pic17 = $name17 = $price17 = $id18 = $pic18 = $name18 = $price18 = $id19 = $pic19 = $name19 = $price19 =""; 


require_once("../../DataBaseLayer/readDataBase/StaticDesktop.php");
$desktop = staticDesktop();


for ($i = 0; $i < 5; $i++) {
  $pos = $i%20 ;

  if($pos == 0){
    ?>
      <style type="text/css">#col0{
        visibility: visible;
      }</style>
    <?php
    $id0 = $desktop[$i]->productId;
    
    $pic0 = $desktop[$i]->picture ;  
    $name0 = $desktop[$i]->name;
    $price0 = $desktop[$i]->price;
    //echo  $pic0;
    
  }

  else if($pos == 1){
    ?>
      <style type="text/css">#col1{
        visibility: visible;
      }</style>
    <?php
    $id1 = $desktop[$i]->productId;
    $pic1 = $desktop[$i]->picture;
    $name1 = $desktop[$i]->name;
    $price1 = $desktop[$i]->price;
  }
  else if($pos == 2){
    ?>
      <style type="text/css">#col2{
        visibility: visible;
      }</style>
    <?php
    $id2 = $desktop[$i]->productId;
    $pic2 = $desktop[$i]->picture;
    $name2 = $desktop[$i]->name;
    $price2 = $desktop[$i]->price;
  }
  else if($pos == 3){
    ?>
      <style type="text/css">#col3{
        visibility: visible;
      }</style>
    <?php
    $id3 = $desktop[$i]->productId;
    $pic3 = $desktop[$i]->picture;
    $name3 = $desktop[$i]->name;
    $price3 = $desktop[$i]->price;
  }
  else if($pos == 4){
    ?>
      <style type="text/css">#col4{
        visibility: visible;
      }</style>
    <?php
    $id4 = $desktop[$i]->productId;
    $pic4 = $desktop[$i]->picture;
    $name4 = $desktop[$i]->name;
    $price4 = $desktop[$i]->price;
  }
}

require_once("../../DataBaseLayer/readDataBase/StaticLaptop.php");
$laptop = staticLaptop();


for ($i = 5; $i < 10; $i++) {
  $pos = $i%20 ;
  if($pos == 5){
    ?>
      <style type="text/css">#col5{
        visibility: visible;
      }</style>
    <?php
    $id5 = $laptop[0]->productId;
    $pic5 = $laptop[0]->picture;
    $name5 = $laptop[0]->name;
    $price5 = $laptop[0]->price;
  }
  else if($pos == 6){
    ?>
      <style type="text/css">#col6{
        visibility: visible;
      }</style>
    <?php
    $id6 = $laptop[1]->productId;
    $pic6 = $laptop[1]->picture;
    $name6 = $laptop[1]->name;
    $price6 = $laptop[1]->price;
  }
  else if($pos == 7){
    ?>
      <style type="text/css">#col7{
        visibility: visible;
      }</style>
    <?php
    $id7 = $laptop[2]->productId;
    $pic7 = $laptop[2]->picture;
    $name7 = $laptop[2]->name;
    $price7 = $laptop[2]->price;
  }
  else if($pos == 8){
    ?>
      <style type="text/css">#col8{
        visibility: visible;
      }</style>
    <?php
    $id8 = $laptop[3]->productId;
    $pic8 = $laptop[3]->picture;
    $name8 = $laptop[3]->name;
    $price8 = $laptop[3]->price;
  }
  else if($pos == 9){
    ?>
      <style type="text/css">#col9{
        visibility: visible;
      }</style>
    <?php
    $id9 = $laptop[4]->productId;
    $pic9 = $laptop[4]->picture;
    $name9 = $laptop[4]->name;
    $price9 = $laptop[4]->price;
  }
}



require_once("../../DataBaseLayer/readDataBase/StaticMotherBoard.php");
$motherboard = staticMotherBoard();


for ($i = 10; $i < 14; $i++) {
  $pos = $i%20 ;
  if($pos == 10){
    ?>
      <style type="text/css">#col10{
        visibility: visible;
      }</style>
    <?php
    $id10 = $motherboard[0]->productId;
    $pic10 = $motherboard[0]->picture;
    $name10 = $motherboard[0]->name;
    $price10 = $motherboard[0]->price;
  }
  else if($pos == 11){
    ?>
      <style type="text/css">#col11{
        visibility: visible;
      }</style>
    <?php
    $id11 = $motherboard[1]->productId;
    $pic11 = $motherboard[1]->picture;
    $name11 = $motherboard[1]->name;
    $price11 = $motherboard[1]->price;
  }
  else if($pos == 12){
    ?>
      <style type="text/css">#col12{
        visibility: visible;
      }</style>
    <?php
    $id12 = $motherboard[2]->productId;
    $pic12 = $motherboard[2]->picture;
    $name12 = $motherboard[2]->name;
    $price12 = $motherboard[2]->price;
  }
  else if($pos == 13){
    ?>
      <style type="text/css">#col13{
        visibility: visible;
      }</style>
    <?php
    $id13 = $motherboard[3]->productId;
    $pic13 = $motherboard[3]->picture;
    $name13 = $motherboard[3]->name;
    $price13 = $motherboard[3]->price;
  }
}


require_once("../../DataBaseLayer/readDataBase/StaticGraphics.php");
$graphicsCard = staticGraphics();


for ($i = 14; $i < 18; $i++) {
  $pos = $i%20 ;
  if($pos == 14){
    ?>
      <style type="text/css">#col14{
        visibility: visible;
      }</style>
    <?php
    $id14 = $graphicsCard[0]->productId;
    $pic14 = $graphicsCard[0]->picture;
    $name14 = $graphicsCard[0]->name;
    $price14 = $graphicsCard[0]->price;
  }
  else if($pos == 15){
    ?>
      <style type="text/css">#col15{
        visibility: visible;
      }</style>
    <?php
    $id15 = $graphicsCard[1]->productId;
    $pic15 = $graphicsCard[1]->picture;
    $name15 = $graphicsCard[1]->name;
    $price15 = $graphicsCard[1]->price;
  }
  else if($pos == 16){
    ?>
      <style type="text/css">#col16{
        visibility: visible;
      }</style>
    <?php
    $id16 = $graphicsCard[2]->productId;
    $pic16 = $graphicsCard[2]->picture;
    $name16 = $graphicsCard[2]->name;
    $price16 = $graphicsCard[2]->price;
  }
  else if($pos == 17){
    ?>
      <style type="text/css">#col17{
        visibility: visible;
      }</style>
    <?php
    $id17 = $graphicsCard[3]->productId;
    $pic17 = $graphicsCard[3]->picture;
    $name17 = $graphicsCard[3]->name;
    $price17 = $graphicsCard[3]->price;
  }
}


require_once("../../DataBaseLayer/readDataBase/StaticMouse.php");
$mouse = staticMouse();


for ($i = 18; $i < 20; $i++) {
  $pos = $i%20 ;
  if($pos == 18){
    ?>
      <style type="text/css">#col18{
        visibility: visible;
      }</style>
    <?php
    $id18 = $mouse[0]->productId;
    $pic18 = $mouse[0]->picture;
    $name18 = $mouse[0]->name;
    $price18 = $mouse[0]->price;
  }
  else if($pos == 19){
    ?>
      <style type="text/css">#col19{
        visibility: visible;
      }</style>
    <?php
    $id19 = $mouse[1]->productId;
    $pic19 = $mouse[1]->picture;
    $name19 = $mouse[1]->name;
    $price19 = $mouse[1]->price;
  }
}


?>





<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../CSS/staticHome.css">

  </head>

  <body>
    <?php 
    
      include 'Head.php';
      session_start();
      //$userEmail = $_SESSION['UserEmail'];
      //echo $_SESSION['UserEmail'];
    
    ?>
    
      <?php include 'MainHeader.php';?>
      <br><br><br><br><br><br><br><br>

      <div class="container">

        <div class="leftcontainer">

          <div class="l-row">

            <div class="left-box1">

              <p style="font-size: 15px; font-weight: bold;">Price Range</p>
              <hr>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">0 - 1000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">1000 - 2000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">2000 - 5000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">5000 - 10000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">10000 - 15000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">15000 - 20000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">20000 - 30000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">30000 - 50000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">50,000 - 1,00,000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">1,00,000 - 1,50,000</label><br>
              <input type="radio" name="Amount" id="box1">
              <label for="box1">1,50,000 - 2,00,000</label><br>

              
              <input type="submit" class="submit-btn" name="" value="Submit">
                
            </div>

            <div class="left-box2">
              <p style="font-size: 15px; font-weight: bold;">Availablility</p>
              <hr>
              <input type="radio" name="Available" id="box1">
              <label for="box1">Available</label><br>
              <input type="radio" name="Available" id="box1">
              <label for="box1">Out of Stock</label><br>
              <input type="radio" name="Available" id="box1">
              <label for="box1">Upcoming</label><br>

              <input type="submit" class="submit-btn" name="" value="Submit">
            </div>
          </div>

        </div>

        <div class="maincontainer">
          <div class="row">

          <!-- ? diya pass korake query string bole -->

            <a href="">
              <div class="col" id = "col0">
                <img src="<?php echo $pic0 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name0 ?></p>  
                <hr>
                <p style = "color: black"><?php echo $price0 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col1">
                <img src="<?php echo $pic1 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name1 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price1 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col2">
                <img src="<?php echo $pic2 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name2 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price2 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col3">
                <img src="<?php echo $pic3 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name3 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price3 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col4">
                <img src="<?php echo $pic4 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name4 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price4 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col5">
                <img src="<?php echo $pic5 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name5 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price5 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col6">
                <img src="<?php echo $pic6 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name6 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price6 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col7">
                <img src="<?php echo $pic7 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name7 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price7 ?></p> 
              </div>
            </a>


            <a href="">
              <div class="col" id = "col8">
                <img src="<?php echo $pic8 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name8 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price8 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col9">
                <img src="<?php echo $pic9 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name9 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price9 ?></p> 
              </div>
            </a>


            <a href="">
              <div class="col" id = "col10">
                <img src="<?php echo $pic10 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name10 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price10 ?></p> 
              </div>
            </a>



            <a href="">
              <div class="col" id = "col11">
                <img src="<?php echo $pic11 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name11 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price11 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col12">
                <img src="<?php echo $pic12 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name12 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price12 ?></p> 
              </div>
            </a>


            <a href="">
              <div class="col" id = "col13">
                <img src="<?php echo $pic13 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name13 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price13 ?></p> 
              </div>
            </a>



            <a href="">
              <div class="col" id = "col14">
                <img src="<?php echo $pic14 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name14 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price14 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col15">
                <img src="<?php echo $pic15 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name15 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price15 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col16">
                <img src="<?php echo $pic16 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name16 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price16 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col17">
                <img src="<?php echo $pic17 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name17 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price17 ?></p> 
              </div>
            </a>

            <a href="">
              <div class="col" id = "col18">
                <img src="<?php echo $pic18 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name18 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price18 ?></p> 
              </div>
            </a>


            <a href="">
              <div class="col" id = "col19">
                <img src="<?php echo $pic19 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name19 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price19 ?></p> 
              </div>
            </a>

            
            
          </div>
          

        </div>

        
      </div>



      

      <!--<div class="container">

        

        <div class="product">
          <h2 style="padding-left: 50px;">Monitors</h1>
          <div class="row">
            <div class="col">
              <img src="Pictures/ASUS_va229hr.jpg">
              <h5>ASUS VA229 Hr 21.5" IPS Monitor</h2>
              <p>BDT 12,000</p>
            </div>

            <div class="col">
              <img src="Pictures/BenQ.jpg">
              <h5>BenQ GW2480 24" IPS Monitor</h2>
              <p>BDT 16,200</p>
            </div>

            <div class="col">
              <img src="Pictures/BenQ-zowie-x.jpg">
              <h5>BenQ Zowie 24" 144Hz Gaming Monitor</h2>
              <p>BDT 25,500</p>
            </div>

            <div class="col">
              <img src="Pictures/Dell-p2419.jpg">
              <h5>Dell P2419H 24" Full HD LED Monitor</h2>
              <p>BDT 18,500</p>
            </div>

            
          </div>
        
        </div> 
      </div>-->




      <!---------Footer-------->


      

    
    
    
  </body>

</html>

<?php include 'Footerv2.php';?>