<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['brand_form_select'];
            $type = $_POST['type_select'];
            $clock_speed = $_POST['Clock_speed_select'];
            $core_number = $_POST['Core_number_select'];
            $thread_number = $_POST['Thread_number_select'];
            $ram_brand = $_POST['Ram_brand_select'];
            $ram_bus_speed = $_POST['ram_bus_speed_select'];
            $ram_capacity = $_POST['ram_capacity_select'];
            $ram_type = $_POST['ram_type_select'];
            $casing_brand = $_POST['casing_Brand_select'];
            $casing_type = $_POST['casing_type_select'];
            $power_supply_brand = $_POST['power_supply_Brand_select'];
            $power_supply_wattage = $_POST['power_supply_wattage_select'];
            $motherboard_brand = $_POST['motherboard_Brand_select'];
            $motherboard_form_factor = $_POST['motherboard_form_factor_select'];
            $graphics_card_brand = $_POST['Graphics_card_brand_select'];
            $graphics_card_capacity = $_POST['Graphics_card_capacity_select'];
            $graphics_card_type = $_POST['Graphics_card_type_select'];
            $hard_disk_brand = $_POST['Hard_disk_brand_select'];
            $hard_disk_capacity = $_POST['hard_disk_capacity_select'];
            $hard_disk_speed = $_POST['Hard_disk_speed_select'];
            $hard_disk_form_factor = $_POST['Hard_disk_form_factor_select'];
            $ssd_brand = $_POST['SSD_brand_select'];
            $ssd_capacity = $_POST['Ssd_capacity_select'];
            $ssd_form_factor = $_POST['SSD_form_factor_select'];
            $cooler_brand = $_POST['Cooler_brand_select'];
            $cooler_type = $_POST['Cooler_type_select'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/desktop/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into desktop(brand,processorType,clockSpeed,noOfCore,noOfThread,ramBrand,ramBusSpeed,ramCapacity,ramType,casingBrand,casingType,powerSupplyBrand,powerSupplyWattage,motherboardBrand,motherboardFormFactor,graphicsCardBrand,graphicsCardCapacity,graphicsCardMemoryType,hddBrand,hddCapacity,hddSpeed,hddFormFactor,ssdBrand,ssdCapacity,ssdFormFactor,coolerBrand,coolerType,price,quantity,description,picture) values ('$brand','$type','$clock_speed','$core_number','$thread_number','$ram_brand','$ram_bus_speed','$ram_capacity','$ram_type','$casing_brand','$casing_type','$power_supply_brand','$power_supply_wattage','$motherboard_brand','$motherboard_form_factor','$graphics_card_brand','$graphics_card_capacity','$graphics_card_type','$hard_disk_brand','$hard_disk_capacity','$hard_disk_speed','$hard_disk_form_factor','$ssd_brand','$ssd_capacity','$ssd_form_factor','$cooler_brand','$cooler_type','$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Product Add Sucessful";

        ?>
    </body>
</html>