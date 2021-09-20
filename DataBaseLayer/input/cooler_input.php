<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/coolerProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "cooler_input">
                <!-- Select Cooler Brand  -->

                <?php
                    echo '<br>Select Cooler Brand<br>';
                    $Cooler_brand = array("-----","Antec", "Gamdias", "Lian Li", "Corsair", "Noctua", "Cooler Master", "MSI", "Gigabyte", "NZXT", "Deepcool");
                    echo "<select id = 'cooler_brand' name = 'Cooler_brand_select'>";
                    foreach($Cooler_brand as $cooler_bnd) {
                        echo "<option value='$cooler_bnd'>$cooler_bnd</option>";
                    }
                    echo "</select>";
                ?>
                <!-- Select Cooler Type -->
                <?php
                    echo '<br>Select Cooler Type<br>';
                    $Cooler_type = array("-----","Air", "Liquid");
                    echo "<select id = 'cooler_type' name = 'Cooler_type_select'>";
                    foreach($Cooler_type as $cooler_typ) {
                        echo "<option value='$cooler_typ'>$cooler_typ</option>";
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