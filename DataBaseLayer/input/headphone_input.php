<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/headphoneProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "headphone_input">
                <!--Select Headphone_brand-->
                <?php
                    echo '<br>Select Headphone Brand<br>';
                    $Headphone_brand = array("-----", "Team", "Adata", "Trascend","Gigabyte","Logitech","Microsoft","Asus");
                    echo "<select id = 'headphone_brand' name = 'headphone_brand_select'>";
                    foreach($Headphone_brand as $headphone_brand) {
                        echo "<option value='$headphone_brand'>$headphone_brand</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Headphone type -->
                <?php
                    echo '<br>Select Headphone Type<br>';
                    $Headphone_type = array("-----","Gaming", "With Microphone", "Programable", "Multicolor", "Studio Monitor");
                    echo "<select id = 'headphone_type' name = 'headphone_type_select'>";
                    foreach($Headphone_type as $headphone_type) {
                        echo "<option value='$headphone_type'>$headphone_type</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Headphone interface -->
                <?php
                    echo '<br>Select Headphone Interface<br>';
                    $Headphone_interface = array("-----","Wired","WIreless","USB", "Type C","Blutooth");
                    echo "<select id = 'headphone_interface' name = 'headphone_interface_select'>";
                    foreach($Headphone_interface as $headphone_interface) {
                        echo "<option value='$headphone_interface'>$headphone_interface</option>";
                    }
                    echo "</select>";
                ?>
                    <!-- Select Headphone_color -->
                    <?php
                    echo '<br>Headphone Color<br>';
                    $Headphone_color = array("-----","Black", "White", "Green", "Multicolor");
                    echo "<select id = 'headphone_color' name = 'headphone_color_select'>";
                    foreach($Headphone_color as $headphone_color) {
                        echo "<option value='$headphone_color'>$headphone_color</option>";
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