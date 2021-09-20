<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>  

  <form action="../inputDataBase/laptopProductDb.php" method = "post" enctype = "multipart/form-data">
        <div class = "desktop_input">
        
        <!-- Select Brand -->
        <?php
            echo '<br>Select Laptop Brand<br>';
            $Laptop_brand = array("-----","Razer", "Mi", "MacBook", "Surface", "Dell", "HP", "Lenovo", "Acer", "AVITA", "Asus", "Gigabyte", "MSI", "Chuwi", "Huawei");
            echo "<select id = 'laptop_brand' name = 'laptop_brand_select'>";
            foreach($Laptop_brand as $laptop_bnd) {
                echo "<option value='$laptop_bnd'>$laptop_bnd</option>";
            }
            echo "</select>";
        ?>

        
        <!-- Processor Select -->
        <?php
            echo '<br>Select Processor Brand<br>';
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
        <!-- Screen Section -->
        <!-- Select Laptop Screen Size -->
        <?php
            echo '<br>Select Laptop Screen Size<br>';
            $Screen_size = array("-----","10 inch", "11 inch", "13 inch", "14 inch", "15.6 inch", "17.3 inch");
            echo "<select id = 'screen_size' name = 'Screen_size_select'>";
            foreach($Screen_size as $scrSize) {
                echo "<option value='$scrSize'>$scrSize</option>";
            }
            echo "</select>";
        ?>
        <!-- Select Resulation -->
        <?php
            echo '<br>Select Laptop Screen Resulation<br>';
            $Screen_resulation = array("-----","1280 X 1080", "1366 X 768", "2K", "4K" );
            echo "<select id = 'screen_resulation' name = 'Screen_resulation_select'>";
            foreach($Screen_resulation as $scrResulation) {
                echo "<option value='$scrResulation'>$scrResulation</option>";
            }
            echo "</select>";
        ?>        
        <!-- RAM Section -->
        
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


        <!--Graphics Section-->
        <!-- Select Graphics Card Type -->
        <?php
            echo '<br>Select Graphics Card Type<br>';
            $Graphics_card_type = array("-----","Intel Built in", "AMD APU", "Nvidia Dedicated");
            echo "<select id = 'graphics_card_type' name = 'Graphics_card_type_select'>";
            foreach($Graphics_card_type as $graphics_typ) {
                echo "<option value='$graphics_typ'>$graphics_typ</option>";
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
            $Graphics_card_memory_type = array("-----","DDR3", "DDR4", "DDR5", "GDDR5", "GDDR6");
            echo "<select id = 'graphics_card_memory_type' name = 'Graphics_card_memory_select'>";
            foreach($Graphics_card_memory_type as $graphics_mem_typ) {
                echo "<option value='$graphics_mem_typ'>$graphics_mem_typ</option>";
            }
            echo "</select>";
        ?>

        <!-- Hard Disk section -->
        
        
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
            <br><br><label for="model">Model No:</label>
            <input type="text" id="model" name="model"><br>

            <br><label for="price">Price</label>
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

<script>
    var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
