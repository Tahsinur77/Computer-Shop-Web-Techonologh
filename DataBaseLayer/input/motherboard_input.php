<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/motherboardProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "motherboard_input">
                <!-- Select Motherboard brand -->
                <?php
                    echo '<br>Select Motherboard brand<br>';
                    $Motherboard_Brand = array("-----","ASRock", "ASUS", "GIGABYTE", "MSI");
                    echo "<select id = 'motherboard_brand' name = 'motherboard_Brand_select'>";
                    foreach($Motherboard_Brand as $motherboard_bnd) {
                        echo "<option value='$motherboard_bnd'>$motherboard_bnd</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Motherboard form factor -->
                <?php
                    echo '<br>Select Motherboard form factor<br>';
                    $Motherboard_form_factor = array("-----","ATX", "MicroATX", "ITX", "Mini ITX", "E-ATX");
                    echo "<select id = 'motherboard_form_factor' name = 'motherboard_form_factor_select'>";
                    foreach($Motherboard_form_factor as $motherboard_fac) {
                        echo "<option value='$motherboard_fac'>$motherboard_fac</option>";
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