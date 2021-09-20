<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/mouseProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "mouse_input">
                <!--Select Mouse_brand-->
                <?php
                    echo '<br>Select Mouse_brand<br>';
                    $Mouse_brand = array("-----", "Team", "Adata", "Trascend","Gigabyte","Logitech","Microsoft","Asus");
                    echo "<select id = 'mouse_brand' name = 'mouse_brand_select'>";
                    foreach($Mouse_brand as $mouse_brand_name) {
                        echo "<option value='$mouse_brand_name'>$mouse_brand_name</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Mouse_type -->
                <?php
                    echo '<br>Select Mouse_type<br>';
                    $Mouse_type = array("-----","Gaming", "RGB", "Programable", "Multicolor", "Thinner");
                    echo "<select id = 'mouse_type' name = 'mouse_type_select'>";
                    foreach($Mouse_type as $mouse_type) {
                        echo "<option value='$mouse_type'>$mouse_type</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Mouse_interface -->
                <?php
                    echo '<br>Select Mouse interface<br>';
                    $Mouse_interface = array("-----","Wired","WIreless","USB", "Type C","Blutooth");
                    echo "<select id = 'mouse_interface' name = 'mouse_interface_select'>";
                    foreach($Mouse_interface as $mouse_interface) {
                        echo "<option value='$mouse_interface'>$mouse_interface</option>";
                    }
                    echo "</select>";
                ?>
                    <!-- Select Mouse_number_of_keys -->
                    <?php
                    echo '<br>Mouse_number_of_keys<br>';
                    $Mouse_number_of_keys = array("-----","Up to 4", "4 to 6", "7 to 10", "11 & above");
                    echo "<select id = 'mouse_number_of_keys' name = 'mouse_number_of_keys_select'>";
                    foreach($Mouse_number_of_keys as $mouse_number_of_keys) {
                        echo "<option value='$mouse_number_of_keys'>$mouse_number_of_keys</option>";
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