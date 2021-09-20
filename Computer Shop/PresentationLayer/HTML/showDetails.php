<?php

  
  
  $productId = $_GET['var1'];
  $page = $_GET['var2'];

  function replace_extension($filename, $new_extension) {
    $info = pathinfo($filename);
    return $info['filename'] . '.' . $new_extension;
  }

  //echo $page;

  $y = substr($page,0,-4)."_specification";
  //echo $y;
  $x = replace_extension($y,'php');
  $open6 = "../../BusinessLayer/specification/".basename($x);
  
  $open5 = "../../DataBaseLayer/readDataBase/".basename($page);

  require_once($open5);
  $singleProduct = singleProduct($productId);

  $name = $singleProduct->name;
  $pic = $singleProduct->picture;
  $quantity= $singleProduct->quantity;



  if($quantity>0){
    $status = "In Stock";
  }
  else{
    $status = "Out Stock";
  }
  $price= $singleProduct->price;
  $brand= $singleProduct->brand;
  $model= $singleProduct->model;
  $keyFeatures= $singleProduct->keyFeatures;
  $price = $singleProduct->price;
  $description = $singleProduct->description;

  //echo $x;


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../CSS/showDetailsv2.css">
  <!-- <link rel="stylesheet" href="../CSS/showDetailsCss.css"> -->




</head>
<body>

  <?php include 'Head.php';?>
  

  <!-- <br><br><br><br><br><br><br><br><br><br> -->

  <div class="lap">
    <!-- <div class="lap1">
      <a class="link_review" href="#reviews">Review(s)</a>
      <a class="link_ans" href="#ans">Answer Question(s)</a>
    </div> -->
    
    <div class="lap2">

      <div class="picBox">
        <img src="<?php echo $pic ?>" style = "width: 280px ;height:400px; display: block;margin-left: auto;margin-right: auto;padding-top: 100px">
      </div>
  
      <div class="informationBox">
          <h1><?php echo $name ?></h1>
          <div class="miniInfo">
            <p style="border:1px solid black; width: auto;height: 25px; padding-left: 2px;padding-top: 4px;margin-left: 0px; float:left; border-radius: 12px; background-color: darkgray;">Price: <?php echo $price ?></p>
          
            <p style="border:1px solid black; width: auto;height: 25px; padding-left: 5px;padding-top: 4px;margin-left: 5px; float: left; border-radius: 12px; background-color: darkgray;"> Status: <?php echo $status ?></p>

            <p style="border:1px solid black; width: auto;height: 25px; padding-left: 5px; padding-top: 4px;margin-left: 5px; float: left; border-radius: 12px;background-color: darkgray;"> Product Id: <?php echo $productId ?></p>

            <p style="border:1px solid black; width: auto;height: 25px; padding-left: 5px;padding-top: 4px;margin-left: 5px; float: left; border-radius: 12px; background-color: darkgray;"> Brand: <?php echo $brand ?></p>
          </div>

          <div class="details">
            <br>
            <p></p>
            <br>
            <p style="font-size: 20px; ">Key Features</p>
            <p>Model: <?php echo $model ?></p>
            <p><?php echo $keyFeatures?></p>
            
            <a href="#specification" style="color: red;">View More Info</a>
          </div>

          <div class="payment">
            <p style="font-size: 20px;">Payment Options</p>
            <label class="fullpay">
              
              <input type="radio" style="float: left; width : 10%; height : 2em; margin-left: 20px; margin-top: 50px" name="pay" value="full" >
              
              <div for="full" style="float: left; padding-left: 30px; padding-top: 5px;">
                <h3><?php echo $price ?> Tk</h3>
                <p style="font-size: small;">Cash Discount Price</p>
                <p style="font-size: small;">Online / Cash Payment</p>

              </div>
              
            </label>
            
          </div>

          <br><br> <br><br><br><br><br><br><br>


          <a href="AddToCart.php?idAddCard=<?php echo  $productId ?>&picAddCard=<?php echo  $pic ?>&priceAddCard=<?php echo  $price ?>&quantityAddCard=<?php echo  $quantity ?>&nameAddCard=<?php echo  $name ?>&pageNameOfProduct=<?php echo $page?>">
            <button type="button" class = "addcard">Add to Cart</button>
          </a>
  
      </div>

      <!-- <div class="lap3">
        <a class="link_specification" href="#specification">Specification</a>
        <a class="link_description" href="#description">Description</a>
        <!-- <a class="link_ans" href="#ans">Question(s)</a>
        <a class="link_review" href="#reviews">Review(s)</a> -->
      </div> -->

    </div>


    <br><br><br><br><br>
    <div class="specification">
      <h2><a id="specification" style="color: black;">Specification</a></h2>

      
      <?php

        //session_start();
        $_SESSION['productId']= $productId;
        $_SESSION['page']= $page;

        include $open6;
      ?>

    </div>


    <div class="description">
      <h2><a id="description" style="color: black;">Description</a></h2>
      <p><?php echo $description?></p>
      
    </div>


  </div>

  <?php include 'Footerv2.php';?>
</body>
</html>


  