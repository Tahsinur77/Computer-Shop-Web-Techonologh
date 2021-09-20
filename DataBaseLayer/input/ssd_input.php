<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/ssdProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "ssd_input">
                <!--Select SSD Brand-->
                <?php
                    echo '<br>Select SSD Brand<br>';
                    $SSD_Brand = array("-----------","Team","Galax", "Adata", "Transcend", "Samsung", "HP", "Gigabyte", "Intel", "Walton" ,"Apacer" , "TRM" , "Asus" , "Netac" , "Colorful");
                    echo "<select id = 'ssd_Brand' name = 'ssd_Brand_select'>";
                    foreach($SSD_Brand as $ssd_Brand_name) {
                        echo "<option value='$ssd_Brand_name'>$ssd_Brand_name</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select SSD Capacity -->
                <?php
                    echo '<br>Select SSD Capacity<br>';
                    $SSD_Capacity = array("-----", "0-128GB" , "129-256GB", "257-512GB" , "513-1TB" , "Over 1TB");
                    echo "<select id = 'ssd_Capacity' name = 'ssd_Capacity_select'>";
                    foreach($SSD_Capacity as $ssd_Capacity) {
                        echo "<option value='$ssd_Capacity'>$ssd_Capacity</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Ram Speed -->
                <?php
                    echo '<br>Select Ram Speed<br>';
                    $Ram_Speed = array("-----","Up to 500MB/s", "500MB/s to 800MB/s", "801MB/s to 1000MB/s", "1001MB/s to above");
                    echo "<select id = 'ram_Speed' name = 'ram_Speed_select'>";
                    foreach($Ram_Speed as $ram_Speed) {
                        echo "<option value='$ram_Speed'>$ram_Speed</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Write Speed -->
                <?php
                    echo '<br>Select  Write Speed<br>';
                    $Write_Speed = array("-----","Up to 500MB/s", "500MB/s to 800MB/s", "801MB/s to 1000MB/s", "1001MB/s to above");
                    echo "<select id = 'write_Speed' name = 'write_Speed_select'>";
                    foreach($Write_Speed as $write_Speed) {
                        echo "<option value='$write_Speed'>$write_Speed</option>";
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