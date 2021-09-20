<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/scannerProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "scanner_input">
                <!--Select Scanner_brand-->
                <?php
                    echo '<br>Select Scanner Brand<br>';
                    $Scanner_brand = array("-----", "HP", "Cannon", "EPSON","Brother","CZUR","Avision","Casio");
                    echo "<select id = 'scanner_brand' name = 'scanner_brand_select'>";
                    foreach($Scanner_brand as $scanner_brand) {
                        echo "<option value='$scanner_brand'>$scanner_brand</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Scanner_speed -->
                <?php
                    echo '<br>Select Scanner Speed<br>';
                    $Scanner_speed = array("-----","Up to 5 sec", "6 to 15 sec", "16 to 25 sec", "26 to above");
                    echo "<select id = 'scanner_speed' name = 'scanner_speed_select'>";
                    foreach($Scanner_speed as $scanner_speed) {
                        echo "<option value='$scanner_speed'>$scanner_speed</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Scanner_resoulation -->
                <?php
                    echo '<br>Select Scanner Resoulation<br>';
                    $Scanner_resoulation = array("-----","Up to 1000 dpi","1001 dpi to 3000 dpi","3001 dpi to 5000 dpi", "5001 dpi & above");
                    echo "<select id = 'scanner_resoulation' name = 'scanner_resoulation_select'>";
                    foreach($Scanner_resoulation as $scanner_resoulation) {
                        echo "<option value='$scanner_resoulation'>$scanner_resoulation</option>";
                    }
                    echo "</select>";
                ?>
                    <!-- Select Scanner_connectivity -->
                    <?php
                    echo '<br>Scanner Connectivity<br>';
                    $Scanner_connectivity = array("-----","USB", "LAN", "WIFI", "USB+LAN","USB+WiFi");
                    echo "<select id = 'scanner_connectivity' name = 'scanner_connectivity_select'>";
                    foreach($Scanner_connectivity as $scanner_connectivity) {
                        echo "<option value='$scanner_connectivity'>$scanner_connectivity</option>";
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