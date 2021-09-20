<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/graphicsCardProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "graphics_input">
                <!--Select Graphics Brand-->
                <?php
                    echo '<br>Select Graphics Card brand<br>';
                    $Graphics_brand = array("-----","XFX", "Galax", "ZOTAC", "GIGABYTE", "ASUS", "Sapphire", "MSI", "PNY", "Colorful");
                    echo "<select id = 'graphics_brand' name = 'Graphics_brand_select'>";
                    foreach($Graphics_brand as $graphics_brand_name) {
                        echo "<option value='$graphics_brand_name'>$graphics_brand_name</option>";
                    }
                    echo "</select>";
                ?>


                <!-- Select graphics card Capacity -->
                <?php
                    echo '<br>Select graphics card capacity<br>';
                    $Graphics_capacity = array("-----","2 GB", "3 GB", "4 GB", "6 GB", "8 GB", "10 GB", "12 GB", "16 GB", "24 GB");
                    echo "<select id = 'graphics_capacity' name = 'graphics_capacity_select'>";
                    foreach($Graphics_capacity as $graphics_cap) {
                        echo "<option value='$graphics_cap'>$graphics_cap</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select memeory Type -->
                <?php
                    echo '<br>Select memeory type<br>';
                    $Memory_type = array("-----","DDR3", "DDR4", "DDR5", "GDDR5", "GDDR6");
                    echo "<select id = 'memory_type' name = 'memory_type_select'>";
                    foreach($Memory_type as $mem_typ) {
                        echo "<option value='$mem_typ'>$mem_typ</option>";
                    }
                    echo "</select>";
                ?>
                <br><br><label for="model">Model No:</label>
                <input type="text" id="model" name="model"><br>

                <br><label for="clockSpeed">Clock Speed</label>
                <input type="text" id="clockSpeed" name="clockSpeed"><br>

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