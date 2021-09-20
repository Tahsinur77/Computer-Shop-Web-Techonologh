<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/pendriveProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "pendrive_input">
                <!--Select PENDRIVE Brand-->
                <?php
                    echo '<br>Select Pendrive Brand<br>';
                    $Pendrive_brand = array("-----", "Team", "Adata", "Trascend","Gigabyte");
                    echo "<select id = 'pendrive_brand' name = 'pendrive_brand_select'>";
                    foreach($Pendrive_brand as $pendrive_brand_name) {
                        echo "<option value='$pendrive_brand_name'>$pendrive_brand_name</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select PENDRIVE CONNECTICITY -->
                <?php
                    echo '<br>Select connectivity Speed<br>';
                    $Connectivity = array("-----","USB 3.2", "USB 2.0", "USB 3.0", "USB 3.1", "USB 3.2");
                    echo "<select id = 'connectivity' name = 'connectivity_select'>";
                    foreach($Connectivity as $connectivity) {
                        echo "<option value='$connectivity'>$connectivity</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select PENDRIVE Capacity -->
                <?php
                    echo '<br>Select Capacity<br>';
                    $Capacity = array("-----","2GB", "4GB", "8GB", "16GB", "32GB", "64GB");
                    echo "<select id = 'capacity' name = 'capacity_select'>";
                    foreach($Capacity as $capacity) {
                        echo "<option value='$capacity'>$capacity</option>";
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