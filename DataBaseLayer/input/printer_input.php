<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/printerProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "printer_input">
                <!--Select Printer_brand-->
                <?php
                    echo '<br>Select Printer Brand<br>';
                    $Printer_brand = array("-----", "HP", "Cannon", "EPSON","Brother","CZUR","Avision","Casio");
                    echo "<select id = 'printer_brand' name = 'printer_brand_select'>";
                    foreach($Printer_brand as $printer_brand) {
                        echo "<option value='$printer_brand'>$printer_brand</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Printer_speed -->
                <?php
                    echo '<br>Select Printer Speed<br>';
                    $Printer_speed = array("-----","Up to 5 sec", "15 to 16.9ppm", "17 to 18.9ppm", "19 to 20.9ppm", "21 to 23.9ppm");
                    echo "<select id = 'printer_speed' name = 'printer_speed_select'>";
                    foreach($Printer_speed as $printer_speed) {
                        echo "<option value='$printer_speed'>$printer_speed</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Printer_interface -->
                <?php
                    echo '<br>Select Printer interface<br>';
                    $Printer_interface = array("-----","Wired","WIreless","USB", "Type C","Blutooth");
                    echo "<select id = 'printer_interface' name = 'printer_interface_select'>";
                    foreach($Printer_interface as $printer_interface) {
                        echo "<option value='$printer_interface'>$printer_interface</option>";
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