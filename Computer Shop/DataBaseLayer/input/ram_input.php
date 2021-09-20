<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/ramProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "ram_input">
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
        </form>
        
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