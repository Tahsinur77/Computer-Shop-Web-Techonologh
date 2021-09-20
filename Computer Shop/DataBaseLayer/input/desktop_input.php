<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>  

  <form action="../inputDataBase/desktopProductDb.php" method = "post" enctype = "multipart/form-data">
    <div class = "desktop_input">
      <?php
        echo 'Select Processor Brand<br>';
        $Brand = array("-----","AMD","Intel");
        echo "<select id = 'brand' name = 'brand_form_select' onchange='typelist();'>";
          foreach($Brand as $brand) {
            echo "<option value='$brand'>$brand</option>";
          }
        echo "</select>";
      ?>
      <!-- Select Type by js -->
      <br>
      <?php echo "Select Processor Type<br>"; ?>
      <select name="type_select" id="type"></select>
      
      <!-- Select Clock speed -->
      <?php
        echo '<br>Clock Speed<br>';
        $Clock_speed = array("-----","1.2 GHz", "1.5 GHz", "2.0 GHz", "2.5 GHz",   "3.0 GHz", "3.5 GHz");
        echo "<select id = 'clock_speed' name = 'Clock_speed_select'>";
          foreach($Clock_speed as $clock) {
            echo "<option value='$clock'>$clock</option>";
          }
        echo "</select>";
      ?>

      <!-- select core -->
      <?php
        echo '<br>Number Of Core<br>';
        $Core_number = array("-----","2", "4", "8", "12", "16", "24", "32");
        echo "<select id = 'core_number' name = 'Core_number_select'>";
          foreach($Core_number as $core) {
            echo "<option value='$core'>$core</option>";
          }
        echo "</select>";
      ?>

      <!-- select thread -->
      <?php
        echo '<br>Number Of Thread<br>';
        $Thread_number = array("-----","2", "4", "8", "12", "16", "24", "48", "64");
        echo "<select id = 'thread_number' name = 'Thread_number_select'>";
          foreach($Thread_number as $thread) {
            echo "<option value='$thread'>$thread</option>";
          }
        echo "</select>";
      ?>

      <!-- RAM Section -->
      
      <!--Select RAM Brand-->
      <?php
        echo '<br>Select RAM brand<br>';
        $Ram_brand = array("-----","G.Skill","PNY", "HP", "Corsair", "Team", "Adata", "Trascend", "Thermaltake", "Gigabyte");
        echo "<select id = 'ram_brand' name = 'Ram_brand_select'>";
          foreach($Ram_brand as $ram_brand_name) {
            echo "<option value='$ram_brand_name'>$ram_brand_name</option>";
          }
        echo "</select>";
      ?>

      <!-- Select RAM Bus speed -->
      <?php
        echo '<br>Select RAM BUS Speed<br>';
        $Ram_bus_speed = array("-----","1333 MHz", "1600 MHz", "2133 MHz", "2400 MHz", "2666 MHz" ,"2933 MHz", "3000 MHz",
        "3200 MHz", "3466 MHz", "3500 MHz", "3600 MHz", "4000 MHz", "4200 MHz", "4400 MHz","4600 MHz");
        echo "<select id = 'ram_bus_speed' name = 'ram_bus_speed_select'>";
          foreach($Ram_bus_speed as $bus_speed) {
            echo "<option value='$bus_speed'>$bus_speed</option>";
          }
        echo "</select>";
      ?>

       <!-- Select RAM Capacity -->
       <?php
        echo '<br>Select RAM capacity<br>';
        $Ram_capacity = array("-----","2GB", "4GB", "8GB", "16GB", "32GB", "64GB");
        echo "<select id = 'ram_capacity' name = 'ram_capacity_select'>";
          foreach($Ram_capacity as $ram_cap) {
            echo "<option value='$ram_cap'>$ram_cap</option>";
          }
        echo "</select>";
      ?>

      <!-- Select RAM Type -->
      <?php
        echo '<br>Select RAM type<br>';
        $Ram_type = array("-----","DDR3", "DDR3L", "DDR4");
        echo "<select id = 'ram_type' name = 'ram_type_select'>";
          foreach($Ram_type as $ram_typ) {
            echo "<option value='$ram_typ'>$ram_typ</option>";
          }
        echo "</select>";
      ?>

      <!--Casing section-->
      
      <!-- Select Casing brand -->
      <?php
        echo '<br>Select Casing Brand<br>';
        $Casing_Brand = array("-----","Antec", "Gamdias", "Lian Li", "KWG", "MaxGreen", "Corsair", "phantex", "Asus", "Cooler Master", "NZXT", "Gigabyte", "Thermaltake", "Golden Field");
        echo "<select id = 'casing_brand' name = 'casing_Brand_select'>";
          foreach($Casing_Brand as $casing_bnd) {
            echo "<option value='$casing_bnd'>$casing_bnd</option>";
          }
        echo "</select>";
      ?>

      <!-- Select Casing Type -->
      <?php
        echo '<br>Select casing type<br>';
        $Casing_type = array("-----","ATX", "MicroATX", "ITX", "Mni ITX", "E-ATX");
        echo "<select id = 'casing_type' name = 'casing_type_select'>";
          foreach($Casing_type as $casing_typ) {
            echo "<option value='$casing_typ'>$casing_typ</option>";
          }
        echo "</select>";
      ?>
      
      
      <!--Power supply section-->
      
      <!-- Select power supply brand -->
      <?php
        echo '<br>Select power supply Brand<br>';
        $Power_supply_Brand = array("-----","Antec", "Gamdias", "MaxGreen", "Cooler Master", "Thermaltake", "Corsair", "Gigabyte", "Lian Li", "MSI", "Asus", "Aigo");
        echo "<select id = 'power_supply_brand' name = 'power_supply_Brand_select'>";
          foreach($Power_supply_Brand as $psu_bnd) {
            echo "<option value='$psu_bnd'>$psu_bnd</option>";
          }
        echo "</select>";
      ?>
      <!-- Select power supply wattage -->
      <?php
        echo '<br>Select power supply wattage<br>';
        $Power_supply_wattage = array("-----","250 Watt", "300 Watt", "350 Watt", "450 Watt", "500 Watt", "650 Watt", "800 Watt", "1200 Watt");
        echo "<select id = 'power_supply_wattage' name = 'power_supply_wattage_select'>";
          foreach($Power_supply_wattage as $psu_wattage) {
            echo "<option value='$psu_wattage'>$psu_wattage</option>";
          }
        echo "</select>";
      ?>
      <!-- Select Motherboard brand -->
      <?php
        echo '<br>Select Motherboard brand<br>';
        $Motherboard_Brand = array("-----","ASRock", "ASUS", "GIGABYTE", "MSI");
        echo "<select id = 'motherboard_brand' name = 'motherboard_Brand_select'>";
          foreach($Motherboard_Brand as $motherboard_bnd) {
            echo "<option value='$motherboard_bnd'>$motherboard_bnd</option>";
          }
        echo "</select>";
      ?>

      <!-- Select Motherboard form factor -->
      <?php
        echo '<br>Select Motherboard form factor<br>';
        $Motherboard_form_factor = array("-----","ATX", "MicroATX", "ITX", "Mni ITX", "E-ATX");
        echo "<select id = 'motherboard_form_factor' name = 'motherboard_form_factor_select'>";
          foreach($Motherboard_form_factor as $motherboard_fac) {
            echo "<option value='$motherboard_fac'>$motherboard_fac</option>";
          }
        echo "</select>";
      ?>
      <!--Graphics Section-->
      <!-- Select Graphics Card brand -->
      <?php
        echo '<br>Select Graphics Card brand<br>';
        $Graphics_card_brand = array("-----","XFX", "Galax", "ZOTAC", "GIGABYTE", "ASUS", "Sapphire", "MSI", "PNY", "Colorful");
        echo "<select id = 'graphics_card_brand' name = 'Graphics_card_brand_select'>";
          foreach($Graphics_card_brand as $graphics_bnd) {
            echo "<option value='$graphics_bnd'>$graphics_bnd</option>";
          }
        echo "</select>";
      ?>

      <!-- Select graphics card Capacity -->
      <?php
        echo '<br>Select graphics card Capacity<br>';
        $Graphics_card_capacity = array("-----","2GB", "4GB", "8GB", "16GB", "32GB", "64GB");
        echo "<select id = 'graphics_card_capacity' name = 'Graphics_card_capacity_select'>";
          foreach($Graphics_card_capacity as $graphics_cap) {
            echo "<option value='$graphics_cap'>$graphics_cap</option>";
          }
        echo "</select>";
      ?>
      <!-- Select graphics card memory Type -->
      <?php
        echo '<br>Select graphics card memory Type<br>';
        $Graphics_card_type = array("-----","DDR3", "DDR4", "DDR5", "GDDR5", "GDDR6");
        echo "<select id = 'graphics_card_type' name = 'Graphics_card_type_select'>";
          foreach($Graphics_card_type as $graphics_typ) {
            echo "<option value='$graphics_typ'>$graphics_typ</option>";
          }
        echo "</select>";
      ?>

      <!-- Hard Disk section -->
      <!-- Select Hard Disk brand -->
      
      <?php
        echo '<br>Select Hard Disk brand<br>';
        $Hard_disk_brand = array("-----","Toshiba", "Western Digital", "Seagate");
        echo "<select id = 'hard_disk_brand' name = 'Hard_disk_brand_select'>";
          foreach($Hard_disk_brand as $harddisk_bnd) {
            echo "<option value='$harddisk_bnd'>$harddisk_bnd</option>";
          }
        echo "</select>";
      ?>
       <!-- Select Hard disk Capacity -->
       <?php
        echo '<br>Select Hard disk Capacity<br>';
        $Hard_disk_capacity = array("-----","500 GB", "1 TB", "2 TB", "3 TB", "5TB", "12 TB");
        echo "<select id = 'hard_disk_capacity' name = 'hard_disk_capacity_select'>";
          foreach($Hard_disk_capacity as $harddisk_cap) {
            echo "<option value='$harddisk_cap'>$harddisk_cap</option>";
          }
        echo "</select>";
      ?>
       <!-- Select Hard disk speed -->
      <?php
        echo '<br>Select Hard disk speed<br>';
        $Hard_disk_speed = array("-----","5400 RPM", "7200 RPM");
        echo "<select id = 'hard_disk_speed' name = 'Hard_disk_speed_select'>";
          foreach($Hard_disk_speed as $harddisk_speed) {
            echo "<option value='$harddisk_speed'>$harddisk_speed</option>";
          }
        echo "</select>";
      ?>

       <!-- Select Hard disk form factor -->
      <?php
        echo '<br>Select Hard disk form factor<br>';
        $Hard_disk_form_factor = array("-----","2.5 inch", "3.5 inch");
        echo "<select id = 'hard_disk_form_factor' name = 'Hard_disk_form_factor_select'>";
          foreach($Hard_disk_form_factor as $harddisk_form_fact) {
            echo "<option value='$harddisk_form_fact'>$harddisk_form_fact</option>";
          }
        echo "</select>";
      ?>
      
      <!-- SSD  section -->
      <!-- Select Hard Disk brand -->
      
      <?php
        echo '<br>Select SSD brand<br>';
        $SSD_brand = array("-----","Team", "Adata", "Western Digital", "Transcend", "Samsung", "PNY", "HP", "Corsair", "Gigabyte");
        echo "<select id = 'ssd_brand' name = 'SSD_brand_select'>";
          foreach($SSD_brand as $ssd_bnd) {
            echo "<option value='$ssd_bnd'>$ssd_bnd</option>";
          }
        echo "</select>";
      ?>
       <!-- Select SSD Capacity -->
       <?php
        echo '<br>Select SSD Capacity<br>';
        $SSD_capacity = array("-----","120 GB", "240 GB", "500 GB", "1TB");
        echo "<select id = 'ssd_capacity' name = 'Ssd_capacity_select'>";
          foreach($SSD_capacity as $ssd_cap) {
            echo "<option value='$ssd_cap'>$ssd_cap</option>";
          }
        echo "</select>";
      ?>
      <!-- Select SSD form factor -->
      <?php
        echo '<br>Select SSD form factor<br>';
        $SSD_form_factor = array("-----","2.5 inch", "M.2");
        echo "<select id = 'ssd_form_factor' name = 'SSD_form_factor_select'>";
          foreach($SSD_form_factor as $ssd_form_fact) {
            echo "<option value='$ssd_form_fact'>$ssd_form_fact</option>";
          }
        echo "</select>";
      ?>


      <!-- Cooler Section -->
      <!-- Select Cooler Brand  -->

      <?php
        echo '<br>Select Cooler Brand<br>';
        $Cooler_brand = array("-----","Antec", "Gamdias", "Lian Li", "Corsair", "Noctua", "Cooler Master", "MSI", "Gigabyte", "NZXT", "Deepcool");
        echo "<select id = 'cooler_brand' name = 'Cooler_brand_select'>";
          foreach($Cooler_brand as $cooler_bnd) {
            echo "<option value='$cooler_bnd'>$cooler_bnd</option>";
          }
        echo "</select>";
      ?>
      <!-- Select Cooler Type -->
      <?php
        echo '<br>Select Cooler Type<br>';
        $Cooler_type = array("-----","Air", "Liquid");
        echo "<select id = 'cooler_type' name = 'Cooler_type_select'>";
          foreach($Cooler_type as $cooler_typ) {
            echo "<option value='$cooler_typ'>$cooler_typ</option>";
          }
        echo "</select>";
      ?>

    
        <br><br><label for="price">Price</label>
        <input type="text" id="price" name="price"><br>

        <br><label for="quantity">Quantity</label>
        <input type="text" id="quantity" name="quantity"><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50"> </textarea>
        <br><br>
        
        <!-- adding picture -->
        <img id="output" style = "width: 150px; height:150px"/><br>
        <input type="file" name = "image" id = "image" accept="image/*" onchange="loadFile(event)"/>
        <br>
        <input type="submit" name = "insert" id = "insert" value="Insert">
    </div>
  </from>

  <script src="desktop_input.js"></script>
</body>
</html>


<!-- picture preview -->
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
