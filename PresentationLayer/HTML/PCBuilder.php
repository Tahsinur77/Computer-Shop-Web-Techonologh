<?php

$need1 = $_GET['need1'];
$need2 = $_GET['need2'];

$Text = urldecode($_REQUEST['pcc']);
$Mixed = json_decode($Text);
//print_r( $Mixed);

$Mixed[$need2] = $need1;

$Text1 = json_encode($Mixed);
$RequestText1 = urlencode($Text1);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/PCBuilderCSS.css">
</head>
<body>
	<?php include 'Head.php';?>

    <?php include 'MainHeader.php';?>


    <br><br><br><br><br><br>

	<h2 style="text-align: center; padding-top: 5%; color: #3749BB;">Welcome to PC Builder Section</h2>
      <div class="build-container cart">
            <table>
                  <tr>
                        <th style="font-weight: bolder;">Build Your Own PC</th>
												<th></th>
                  </tr>

                  <tr>
                  	<th style="font-weight: Bold;"> Core Components</th>
										<th></th>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/cpu.svg">
                  			<div>
                  				<span>CPU</span>
                  				<span class="mark">Required</span>
                  				<br>
                  				<small style="background-color: whitesmoke;">
                  					<!-- Product Name Will Appear -->
														<?php echo $Mixed[0] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>

                  	<td>
                  		<a class="btn st-outline" href="PCBuilderDetails.php?vr=0&PCBuilderPage=processor&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>

                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/cooler.svg">
                  			<div>
                  				<span>CPU Cooler</span>
                  				<br>
                  				<small style="background-color: whitesmoke;">
                  					<!-- Product Name Will Appear -->
														<?php echo $Mixed[1] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=1&PCBuilderPage=cooler&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/cpu.svg">
                  			<div>
                  				<span>Mother Board</span>
                  				<span class="mark">Required</span>
                  				<br>
                  				<small style="background-color: whitesmoke;">
                  					<!-- Product Name Will Appear -->
														<?php echo $Mixed[2] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=2&PCBuilderPage=motherboard&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/ram.svg">
                  			<div>
                  				<span>Ram - 1</span>
                  				<span class="mark">Required</span>
                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[3] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=3&PCBuilderPage=ram&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/ram.svg">
                  			<div>
                  				<span>Ram - 2</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[4] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=4&PCBuilderPage=ram&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/hdd.svg">
                  			<div>
                  				<span>Storage - 1</span>
                  				<span class="mark">Required</span>
                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[5] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=5&PCBuilderPage=ssd&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/hdd.svg">
                  			<div>
                  				<span>Storage - 2</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[6] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=6&PCBuilderPage=ssd&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/gcard.svg">
                  			<div>
                  				<span>Graphics Card</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[7] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=7&PCBuilderPage=graphicsCard&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/psupply.svg">
                  			<div>
                  				<span>Power Supply</span>
                  				<span class="mark">Required</span>
                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[8] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=8&PCBuilderPage=powerSupply&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/casing.svg">
                  			<div>
                  				<span>Casing</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[9] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=9&PCBuilderPage=desktop&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr>
                  	<th style="font-weight: Bold;"> Peripherals & Other Components</th>
                  	<th></th>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/cpu.svg">
                  			<div>
                  				<span>Casing Cooler</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[10] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=10&PCBuilderPage=cooler&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/monitor.svg">
                  			<div>
                  				<span>Monitor</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[11] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=11&PCBuilderPage=monitor&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/keyboard.svg">
                  			<div>
                  				<span>Keyboard</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[12] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=12&PCBuilderPage=keyboard&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/mouse.svg">
                  			<div>
                  				<span>Mouse</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[13] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=13&PCBuilderPage=mouse&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/cpu.svg">
                  			<div>
                  				<span>Headphone</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[14] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=14&PCBuilderPage=headphone&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>


                  <!--<tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="Pictures/Icons/antivirus.svg">
                  			<div>
                  				<span>Printer</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[15] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=0&PCBuilderPage=printer&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>-->


                  <tr style="background-color: whitesmoke;">
                  	<td>
                  		<div class="product-info">
                  			<img src="../Pictures/Icons/ups.svg">
                  			<div>
                  				<span>UPS</span>

                  				<br>
                  				<small style="background-color: whitesmoke;">
													<?php echo $Mixed[15] ?>
                  				</small>
                  			</div>

                  		</div>
                  	</td>
                  	<td>
					<a class="btn st-outline" href="PCBuilderDetails.php?vr=15&PCBuilderPage=projector&PCBuilderNum=1&pcc=<?php echo $RequestText1?>">Choose</a>
                  	</td>
                  </tr>










                  <tr>

                        <!--<td>
                              <div class="product-info">
                                    <div class="img-box">
                                          <p>Box1</p>
                                    </div>

                                    <div class="img-info">
                                          Product information will written here
                                    </div>
                                    <a href="">Remove</a>
                              </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td class="price">
                              <p>Total Price</p>
                        </td> -->
                  </tr>

            </table>

      </div>


			<?php include 'Footerv2.php';  ?>

</body>
</html>