<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/powerSupplyProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "powerSupply_input">
                <!--Select Graphics Brand-->
                <?php
                    echo '<br>Select Power Supply brand<br>';
                    $PowerSupply_brand = array("-----", "Antec", "Gamdias", "MaxGreen", "Cooler Master", "Thermaltake", "Corsair", "Gigabyte", "Lian Li", "MSI", "Asus", "Aigo");
                    echo "<select id = 'powerSupply_brand' name = 'PowerSupply_brand_select'>";
                    foreach($PowerSupply_brand as $powerSupply_brand_name) {
                        echo "<option value='$powerSupply_brand_name'>$powerSupply_brand_name</option>";
                    }
                    echo "</select>";
                ?>


                <!-- Select Power Supply wattage -->
                <?php
                    echo '<br>Select Power Supply wattage<br>';
                    $PowerSupply_wattage = array("-----","250 Watt", "300 Watt", "350 Watt", "450 Watt", "500 Watt", "650 Watt", "800 Watt", "1200 Watt");
                    echo "<select id = 'powerSupply_wattage' name = 'PowerSupply_wattage_select'>";
                    foreach($PowerSupply_wattage as $powerSupply_wat) {
                        echo "<option value='$powerSupply_wat'>$powerSupply_wat</option>";
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