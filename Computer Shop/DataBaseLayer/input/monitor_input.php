<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/monitorProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "monitor_input">
                <!--Select Monitor Brand-->
                <?php
                    echo '<br>Select Monitor brand<br>';
                    $Monitor_brand = array("-----","Benq", "Asus", "LG", "HP", "Dell", "GIGABYTE", "Samsung", "MSI", "PHILIPS", "Viewsonic", "Acer");
                    echo "<select id = 'monitor_brand' name = 'Monitor_brand_select'>";
                    foreach($Monitor_brand as $monitor_brand_name) {
                        echo "<option value='$monitor_brand_name'>$monitor_brand_name</option>";
                    }
                    echo "</select>";
                ?>


                <!-- Select refresh rate -->
                <?php
                    echo '<br>Select Refresh Rate<br>';
                    $Refresh_rate = array("-----","50 Hz", "60 Hz", "75 Hz", "100 Hz", "120 Hz", "144 Hz", "244 Hz",);
                    echo "<select id = 'refresh_rate' name = 'refresh_rate_select'>";
                    foreach($Refresh_rate as $refresh) {
                        echo "<option value='$refresh'>$refresh</option>";
                    }
                    echo "</select>";
                ?>
                <!-- Select input type  -->
                <?php
                    echo '<br>Select input type<br>';
                    $Input_type = array("-----", "HDMI", "VGA", "DVI", "Display Port");
                    echo "<select id = 'input_type' name = 'Input_type_select'>";
                    foreach($Input_type as $input_typ) {
                        echo "<option value='$input_typ'>$input_typ</option>";
                    }
                    echo "</select>";
                ?>

                <!-- Select Resolution type  -->
                <?php
                    echo '<br>Select Resolution <br>';
                    $Display_resulation = array("-----", "1280 X 1080", "1366 X 768", "2K", "4K" );
                    echo "<select id = 'Display_resulation' name = 'Display_resulation_select'>";
                    foreach($Display_resulation as $display_resulation) {
                        echo "<option value='$display_resulation'>$display_resulation</option>";
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