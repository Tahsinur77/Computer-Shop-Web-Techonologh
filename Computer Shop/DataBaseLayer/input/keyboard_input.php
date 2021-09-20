<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/keyboardProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "keyboard_input">
                <!--Select Keyboard_brand-->
                <?php
                    echo '<br>Select Keyboard brand<br>';
                    $Keyboard_brand = array("-----", "Team", "Adata", "Trascend","Gigabyte","Logitech","Microsoft","Asus");
                    echo "<select id = 'keyboard_brand' name = 'keyboard_brand_select'>";
                    foreach($Keyboard_brand as $keyboard_brand) {
                        echo "<option value='$keyboard_brand'>$keyboard_brand</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Keyboard_type -->
                <?php
                    echo '<br>Select Keyboard Type<br>';
                    $Keyboard_type = array("-----","Gaming", "RGB", "Programable", "Multicolor", "Thinner");
                    echo "<select id = 'keyboard_type' name = 'keyboard_type_select'>";
                    foreach($Keyboard_type as $keyboard_type) {
                        echo "<option value='$keyboard_type'>$keyboard_type</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Keyboard_interface -->
                <?php
                    echo '<br>Select Keyboard Interface<br>';
                    $Keyboard_interface = array("-----","Wired","WIreless","USB", "Type C","Blutooth");
                    echo "<select id = 'keyboard_interface' name = 'keyboard_interface_select'>";
                    foreach($Keyboard_interface as $keyboard_interface) {
                        echo "<option value='$keyboard_interface'>$keyboard_interface</option>";
                    }
                    echo "</select>";
                ?>
                    <!-- Select Switch_type -->
                    <?php
                    echo '<br>Switch Type<br>';
                    $Switch_type = array("-----","Black", "White", "Green", "Multicolor");
                    echo "<select id = 'switch_type' name = 'switch_type_select'>";
                    foreach($Switch_type as $switch_type) {
                        echo "<option value='$switch_type'>$switch_type</option>";
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