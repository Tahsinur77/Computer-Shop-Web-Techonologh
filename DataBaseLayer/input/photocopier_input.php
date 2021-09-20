<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/photocopierProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "photocopier_input">
                <!--Select photocopier_brand-->
                <?php
                    echo '<br>Select Photocopier Brand<br>';
                    $Photocopier_brand = array("-----", "HP", "Cannon", "EPSON","Brother","CZUR","Avision","Casio");
                    echo "<select id = 'photocopier_brand' name = 'photocopier_brand_select'>";
                    foreach($Photocopier_brand as $photocopier_brand) {
                        echo "<option value='$photocopier_brand'>$photocopier_brand</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select copy_speed -->
                <?php
                    echo '<br>Select Copy speed<br>';
                    $Copy_speed = array("-----","Less than 20PPM", "20 to 21.9ppm", "22 to 23.9ppm", "24 to 25.9ppm", "26 to 33.9ppm");
                    echo "<select id = 'copy_speed' name = 'copy_speed_select'>";
                    foreach($Copy_speed as $copy_speed) {
                        echo "<option value='$copy_speed'>$copy_speed</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select interface -->
                <?php
                    echo '<br>Select Interface<br>';
                    $Interface = array("-----","Wired","WIreless","USB", "Type C","Blutooth");
                    echo "<select id = 'interface' name = 'interface_select'>";
                    foreach($Interface as $interface) {
                        echo "<option value='$interface'>$interface</option>";
                    }
                    echo "</select>";
                ?>
                    <!-- Select Paper_size -->
                    <?php
                    echo '<br>Paper Size<br>';
                    $Paper_size = array("-----","A3", "A3+", "A4", "legal");
                    echo "<select id = 'paper_size' name = 'paper_size_select'>";
                    foreach($Paper_size as $paper_size) {
                        echo "<option value='$paper_size'>$paper_size</option>";
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