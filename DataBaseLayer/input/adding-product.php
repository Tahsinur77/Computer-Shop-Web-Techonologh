

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="javascript-condational-form">		
      <form action="">
        <label for="product">Select Product</label>
        <!--/ Product Section-->

        <select id="product" name="product_select">
          <option disabled selected>Select Product</option>
          <option value="desktop">Desktop</option>
          <option value ="laptop">Laptop</option>
          <option value ="cooler">Cooler</option>
          <option value ="ram">Ram</option>
          <option value ="ssd">SSD</option>
          <option value ="motherboard">Motherboard</option>
          <option value ="monitor">Monitor</option>
          <!-- <option value ="casing">Casing</option> -->
          <!-- <option value ="casingCooler">Casing Cooler</option> -->
          <option value ="powerSupply">Power Supply</option>

          <option value="graphicsCard">Graphics Card</option>
          <option value ="headphone">Headphone</option>
          <option value ="keyboard">Keyboard</option>
          <option value ="mouse">Mouse</option>
          <option value ="pendrive">Pendrive</option>
          <option value ="photocopier">Photocopier</option>
          <option value ="printer">Monitor</option>

          <option value ="processor">Processor</option>
          <option value ="Projector">Projector</option>
          <option value ="scanner">Scanner</option>
        
        </select>

        <!-- adding selected php file file from js -->
        <div id="includedContent"></div>
    
      </form>
      <script src="select_product_details.js"></script>
  </div>
    
</body>
</html>