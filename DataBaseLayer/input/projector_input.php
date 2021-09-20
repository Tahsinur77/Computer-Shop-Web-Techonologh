<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/projectorProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "projector_input">
                <!--Select projector_brand-->
                <?php
                    echo '<br>Select projector_brand<br>';
                    $Projector_brand = array("-----", "HP", "Cannon", "EPSON","Brother","CZUR","Avision","Casio");
                    echo "<select id = 'projector_brand' name = 'projector_brand_select'>";
                    foreach($Projector_brand as $projector_brand) {
                        echo "<option value='$projector_brand'>$projector_brand</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select lumnes -->
                <?php
                    echo '<br>Select Lumnes<br>';
                    $Lumnes = array("-----","Up to 2000", "2001 to 3000", "3002 to 4000", "4001 to above");
                    echo "<select id = 'lumnes' name = 'lumnes_select'>";
                    foreach($Lumnes as $lumnes) {
                        echo "<option value='$lumnes'>$lumnes</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select display_technology -->
                <?php
                    echo '<br>Select Display Technology<br>';
                    $Display_technology = array("-----","3LCD","DLP");
                    echo "<select id = 'display_technology' name = 'display_technology_select'>";
                    foreach($Display_technology as $display_technology) {
                        echo "<option value='$display_technology'>$display_technology</option>";
                    }
                    echo "</select>";
                ?>
                    <!-- Select contrast_ratio -->
                    <?php
                    echo '<br>Contrast Ratio<br>';
                    $Contrast_ratio = array("-----","Up to 2000;1", "2001:1 to 5000:1", "5001:1 to 15000;1", "15000;1 to 40000;1");
                    echo "<select id = 'contrast_ratio' name = 'contrast_ratio_select'>";
                    foreach($Contrast_ratio as $contrast_ratio) {
                        echo "<option value='$contrast_ratio'>$contrast_ratio</option>";
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