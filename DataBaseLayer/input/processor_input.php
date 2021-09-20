<html>
    <head>

    </head>
    <body>
        <form action="../inputDataBase/processorProductDb.php" method = "post" enctype = "multipart/form-data">
            <div class = "processor_input">
                <!--Select Processor Brand-->
                <?php
                    echo '<br>Select Processor brand<br>';
                    $Processor_brand = array("-----","Intel", "AMD");
                    echo "<select id = 'processor_brand' name = 'Processor_brand_select'>";
                    foreach($Processor_brand as $processor_brand_name) {
                        echo "<option value='$processor_brand_name'>$processor_brand_name</option>";
                    }
                    echo "</select>";
                ?>

                
                <br><br><label for="model">Model No:</label>
                <input type="text" id="model" name="model"><br>

                <br><label for="clockSpeed">Clock Speed:</label>
                <input type="text" id="clockSpeed" name="clockSpeed"><br>

                <br><label for="core">Core No:</label>
                <input type="text" id="core" name="core"><br>

                <br><label for="thread">Thread No:</label>
                <input type="text" id="thread" name="thread"><br>

                <br><label for="tdp">TDP:</label>
                <input type="text" id="tdp" name="tdp"><br>

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