
<?php

$Text = urldecode($_REQUEST['pcc']);
$Mixe = json_decode($Text);

//print_r($Mixe);

$Text2 = json_encode($Mixe);
$RequestText2 = urlencode($Text2);



function replace_extension($filename, $new_extension) {
  $info = pathinfo($filename);
  return $info['filename'] . '.' . $new_extension;
}

$clickPage = $_GET['PCBuilderPage']; // PCBuilderPage = page name
$ti = $_GET['vr'];


$x = replace_extension($clickPage,'php');
//echo $x;

$click = "../../DataBaseLayer/readDataBase/".basename($x);

require_once($click);
$allProduct = allProduct(); // calling the allDesktop function 

$pageNum = $_GET['PCBuilderNum']; // page number
$start = ($pageNum-1)*20;
if($start+20>count($allProduct)){
  $last = count($allProduct)%20 ;
}
else $last = $start+20 ;

$id0 = $pic0 = $name0 = $price0 = $id1 = $pic1 = $name1 = $price1 = $id2 = $pic2 = $name2 = $price2 = $id3 = $pic3 = $name3 = $price3 = $id4 = $pic4 = $name4 = $price4 = $id5 = $pic5 = $name5 = $price5 = $id6 = $pic6 = $name6 = $price6 = $id7 = $pic7 = $name7 = $price7 = $id8 = $pic8 = $name8 = $price8 = $id9 = $pic9 = $name9 = $price9 = $id10 = $pic10 = $name10 = $price10 = $id11 = $pic11 = $name11 = $price11 = $id12 = $pic12 = $name12 = $price12 = $id13 = $pic13 = $name13 = $price13 = $id14 = $pic14 = $name14 = $price14 = $id15 = $pic15 = $name15 = $price15 = $id16 = $pic16 = $name16 = $price16 = $id17 = $pic17 = $name17 = $price17 = $id18 = $pic18 = $name18 = $price18 = $id19 = $pic19 = $name19 = $price19 =""; 


for ($i = $start; $i < $last; $i++) {
  $pos = $i%20 ;

  if($pos == 0){
    ?>
      <style type="text/css">#col0{
        visibility: visible;
      }</style>
    <?php
    $id0 = $allProduct[$i]->productId;
    $pic0 = $allProduct[$i]->picture ;  
    $name0 = $allProduct[$i]->name;
    $price0 = $allProduct[$i]->price;
    $love0 = $name0." (".$price0.")"; 
  }

  else if($pos == 1){
    ?>
      <style type="text/css">#col1{
        visibility: visible;
      }</style>
    <?php
    $id1 = $allProduct[$i]->productId;
    $pic1 = $allProduct[$i]->picture;
    $name1 = $allProduct[$i]->name;
    $price1 = $allProduct[$i]->price;
    $love1 = $name1." (".$price1.")"; 
    // $Mixed[$ti] = $name1." (".$price1.")";
  }
  else if($pos == 2){
    ?>
      <style type="text/css">#col2{
        visibility: visible;
      }</style>
    <?php
    $id2 = $allProduct[$i]->productId;
    $pic2 = $allProduct[$i]->picture;
    $name2 = $allProduct[$i]->name;
    $price2 = $allProduct[$i]->price;
    $love2 = $name2." (".$price2.")"; 

  }
  else if($pos == 3){
    ?>
      <style type="text/css">#col3{
        visibility: visible;
      }</style>
    <?php
    $id3 = $allProduct[$i]->productId;
    $pic3 = $allProduct[$i]->picture;
    $name3 = $allProduct[$i]->name;
    $price3 = $allProduct[$i]->price;
    $love3 = $name3." (".$price3.")"; 

  }
  else if($pos == 4){
    ?>
      <style type="text/css">#col4{
        visibility: visible;
      }</style>
    <?php
    $id4 = $allProduct[$i]->productId;
    $pic4 = $allProduct[$i]->picture;
    $name4 = $allProduct[$i]->name;
    $price4 = $allProduct[$i]->price;
    $love4 = $name4." (".$price4.")"; 

  }
  else if($pos == 5){
    ?>
      <style type="text/css">#col5{
        visibility: visible;
      }</style>
    <?php
    $id5 = $allProduct[$i]->productId;
    $pic5 = $allProduct[$i]->picture;
    $name5 = $allProduct[$i]->name;
    $price5 = $allProduct[$i]->price;
    $love5 = $name5." (".$price5.")"; 
  }
  else if($pos == 6){
    ?>
      <style type="text/css">#col6{
        visibility: visible;
      }</style>
    <?php
    $id6 = $allProduct[$i]->productId;
    $pic6 = $allProduct[$i]->picture;
    $name6 = $allProduct[$i]->name;
    $price6 = $allProduct[$i]->price;
    $love6 = $name6." (".$price6.")"; 
  }
  else if($pos == 7){
    ?>
      <style type="text/css">#col7{
        visibility: visible;
      }</style>
    <?php
    $id7 = $allProduct[$i]->productId;
    $pic7 = $allProduct[$i]->picture;
    $name7 = $allProduct[$i]->name;
    $price7 = $allProduct[$i]->price;
    $love7 = $name7." (".$price7.")"; 
  }
  else if($pos == 8){
    ?>
      <style type="text/css">#col8{
        visibility: visible;
      }</style>
    <?php
    $id8 = $allProduct[$i]->productId;
    $pic8 = $allProduct[$i]->picture;
    $name8 = $allProduct[$i]->name;
    $price8 = $allProduct[$i]->price;
    $love8 = $name8." (".$price8.")"; 
  }
  else if($pos == 9){
    ?>
      <style type="text/css">#col9{
        visibility: visible;
      }</style>
    <?php
    $id9 = $allProduct[$i]->productId;
    $pic9 = $allProduct[$i]->picture;
    $name9 = $allProduct[$i]->name;
    $price9 = $allProduct[$i]->price;
    $love9 = $name9." (".$price9.")"; 
  }
  else if($pos == 10){
    ?>
      <style type="text/css">#col10{
        visibility: visible;
      }</style>
    <?php
    $id10 = $allProduct[$i]->productId;
    $pic10 = $allProduct[$i]->picture;
    $name10 = $allProduct[$i]->name;
    $price10 = $allProduct[$i]->price;
    $love10 = $name10." (".$price10.")"; 
  }
  else if($pos == 11){
    ?>
      <style type="text/css">#col11{
        visibility: visible;
      }</style>
    <?php
    $id11 = $allProduct[$i]->productId;
    $pic11 = $allProduct[$i]->picture;
    $name11 = $allProduct[$i]->name;
    $price11 = $allProduct[$i]->price;
    $love11 = $name11." (".$price11.")"; 
  }
  else if($pos == 12){
    ?>
      <style type="text/css">#col12{
        visibility: visible;
      }</style>
    <?php
    $id12 = $allProduct[$i]->productId;
    $pic12 = $allProduct[$i]->picture;
    $name12 = $allProduct[$i]->name;
    $price12 = $allProduct[$i]->price;
    $love12 = $name12." (".$price12.")"; 
  }
  else if($pos == 13){
    ?>
      <style type="text/css">#col13{
        visibility: visible;
      }</style>
    <?php
    $id13 = $allProduct[$i]->productId;
    $pic13 = $allProduct[$i]->picture;
    $name13 = $allProduct[$i]->name;
    $price13 = $allProduct[$i]->price;
    $love13 = $name13." (".$price13.")"; 
  }
  else if($pos == 14){
    ?>
      <style type="text/css">#col14{
        visibility: visible;
      }</style>
    <?php
    $id14 = $allProduct[$i]->productId;
    $pic14 = $allProduct[$i]->picture;
    $name14 = $allProduct[$i]->name;
    $price14 = $allProduct[$i]->price;
    $love14 = $name14." (".$price14.")"; 
  }
  else if($pos == 15){
    ?>
      <style type="text/css">#col15{
        visibility: visible;
      }</style>
    <?php
    $id15 = $allProduct[$i]->productId;
    $pic15 = $allProduct[$i]->picture;
    $name15 = $allProduct[$i]->name;
    $price15 = $allProduct[$i]->price;
    $love15 = $name15." (".$price15.")"; 
  }
  else if($pos == 16){
    ?>
      <style type="text/css">#col16{
        visibility: visible;
      }</style>
    <?php
    $id16 = $allProduct[$i]->productId;
    $pic16 = $allProduct[$i]->picture;
    $name16 = $allProduct[$i]->name;
    $price16 = $allProduct[$i]->price;
    $love16 = $name16." (".$price16.")"; 
  }
  else if($pos == 17){
    ?>
      <style type="text/css">#col17{
        visibility: visible;
      }</style>
    <?php
    $id17 = $allProduct[$i]->productId;
    $pic17 = $allProduct[$i]->picture;
    $name17 = $allProduct[$i]->name;
    $price17 = $allProduct[$i]->price;
    $love17 = $name17." (".$price17.")"; 
  }
  else if($pos == 18){
    ?>
      <style type="text/css">#col18{
        visibility: visible;
      }</style>
    <?php
    $id18 = $allProduct[$i]->productId;
    $pic18 = $allProduct[$i]->picture;
    $name18 = $allProduct[$i]->name;
    $price18 = $allProduct[$i]->price;
    $love18 = $name18." (".$price18.")"; 
  }
  else if($pos == 19){
    ?>
      <style type="text/css">#col19{
        visibility: visible;
      }</style>
    <?php
    $id19 = $allProduct[$i]->productId;
    $pic19 = $allProduct[$i]->picture;
    $name19 = $allProduct[$i]->name;
    $price19 = $allProduct[$i]->price;
    $love19 = $name19." (".$price19.")"; 
  }


  
}

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../CSS/PCBuilderDetails.css">

    <style>
      .addButton{
        display:flex;
        color: #fff;
        width:50px;
        height:30px;
        background: #3749bb;
        padding-left:7%;
        padding-top:3%;
        margin-left:110px;
        margin-bottom:20px;
        bottom:0px;
        border-radius: 5px;

      }

    </style>

  </head>

  <body>
    <?php include 'Head.php';?>
    
      <?php include 'MainHeader.php';?>
      <br><br><br><br><br><br><br><br>

      <form action="" method = "post">

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
                <p style="font-size: 15px; font-weight: bold;">Availability</p>
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

            <a href="showDetails.php?var1=<?php echo  $id0 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col0">
                <img src="<?php echo $pic0 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name0 ?></p>  
                <hr>
                <p style = "color: black;"><?php echo $price0 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love0?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id1 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col1">
                <img src="<?php echo $pic1 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name1 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price1 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love1?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id2 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col2">
                <img src="<?php echo $pic2 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name2 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price2 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love2?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id3 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col3">
                <img src="<?php echo $pic3 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name3 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price3 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love3?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id4 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col4">
                <img src="<?php echo $pic4 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name4 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price4 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love4?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id5 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col5">
                <img src="<?php echo $pic5 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name5 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price5 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love5?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id6 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col6">
                <img src="<?php echo $pic6 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name6 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price6 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love6?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id7 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col7">
                <img src="<?php echo $pic7 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name7 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price7 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love7?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>


            <a href="showDetails.php?var1=<?php echo  $id8 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col8">
                <img src="<?php echo $pic8 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name8 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price8 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love8?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id9 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col9">
                <img src="<?php echo $pic9 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name9 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price9 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love9?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>


            <a href="showDetails.php?var1=<?php echo  $id10 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col10">
                <img src="<?php echo $pic10 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name10 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price10 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love10?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>



            <a href="showDetails.php?var1=<?php echo  $id11 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col11">
                <img src="<?php echo $pic11 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name11 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price11 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love11?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id12 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col12">
                <img src="<?php echo $pic12 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name12 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price12 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love12?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>


            <a href="showDetails.php?var1=<?php echo  $id13 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col13">
                <img src="<?php echo $pic13 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name13 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price13 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love13?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>



            <a href="showDetails.php?var1=<?php echo  $id14 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col14">
                <img src="<?php echo $pic14 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name14 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price14 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love14?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id15 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col15">
                <img src="<?php echo $pic15 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name15 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price15 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love15?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id16 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col16">
                <img src="<?php echo $pic16 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name16 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price16 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love16?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id17 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col17">
                <img src="<?php echo $pic17 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name17 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price17 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love17?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            <a href="showDetails.php?var1=<?php echo  $id18 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col18">
                <img src="<?php echo $pic18 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name18 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price18 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love18?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>


            <a href="showDetails.php?var1=<?php echo  $id19 ?>&var2=<?php echo  $x ?>">
              <div class="col" id = "col19">
                <img src="<?php echo $pic19 ?>" style = "width: 150px ;height:150px"><br>
                <p style = "color: black"><?php echo $name19 ?></p>
                <hr>
                <p style = "color: black"><?php echo $price19 ?></p> 
                <a href="PCBuilder.php?need1=<?php echo $love19?>&need2=<?php echo $ti?>&pcc=<?php echo $RequestText2?>" class = "addButton">Add</a>
              </div>
            </a>

            
            
          </div>

          <!-- <div class = "nextPage">
              <?php $a = 1;?>
              <a style = "color: black" href="HomePage.php?number=<?php echo  $a ?>">
                <p><?php echo $a ?></p>
              </a>
          </div> -->

        </div>

        
      </div>
      </form>


    <?php include 'Footerv2.php';?>
  </body>

</html>

