<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $laptop_brand = $_POST['laptop_brand_select'];
            $processor_brand = $_POST['brand_form_select'];
            $type = $_POST['type_select'];
            $clock_speed = $_POST['Clock_speed_select'];
            $core_number = $_POST['Core_number_select'];
            $thread_number = $_POST['Thread_number_select'];
            $screen_size = $_POST['Screen_size_select'];
            $screen_resulation = $_POST['Screen_resulation_select'];
            $ram_bus_speed = $_POST['ram_bus_speed_select'];
            $ram_capacity = $_POST['ram_capacity_select'];
            $ram_type = $_POST['ram_type_select'];
            $Graphics_card_type = $_POST['Graphics_card_type_select'];
            $graphics_card_capacity = $_POST['Graphics_card_capacity_select'];
            $graphics_card_mem_type = $_POST['Graphics_card_memory_select'];
            $hard_disk_capacity = $_POST['hard_disk_capacity_select'];
            $hard_disk_speed = $_POST['Hard_disk_speed_select'];
            $hard_disk_form_factor = $_POST['Hard_disk_form_factor_select'];
            $ssd_capacity = $_POST['Ssd_capacity_select'];
            $ssd_form_factor = $_POST['SSD_form_factor_select'];
            $model = $_POST['model'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/laptop/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }

            $add = "insert into laptop(brand,processorBrand,processorType,clockSpeed,noOfCore,noOfThread,screenSize,resulation,ramBusSpeed,ramCapacity,ramType,GraphicsCardType,GraphicsCardCapacity,GraphicsCardMemoryType,HardDiskCapacity,HardDiskSpeed,HardDiskFormFactor,ssdCapacity,ssdFormFactor,laptopModel,price,quantity,description,picture) values ('$laptop_brand','$processor_brand','$type','$clock_speed','$core_number','$thread_number','$screen_size','$screen_resulation','$ram_bus_speed','$ram_capacity','$ram_type','$Graphics_card_type','$graphics_card_capacity','$graphics_card_mem_type','$hard_disk_capacity','$hard_disk_speed','$hard_disk_form_factor','$ssd_capacity','$ssd_form_factor','$model','$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Laptop Add Sucessful";

        ?>
    </body>
</html>