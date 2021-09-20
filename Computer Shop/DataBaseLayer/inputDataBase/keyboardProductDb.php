<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['keyboard_brand_select'];
            $type = $_POST['keyboard_type_select'];
            $interface = $_POST['keyboard_interface_select'];
            $switch_type = $_POST['switch_type_select'];
            $model_no = $_POST['model'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/keyboard/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into keyboard(brand,type,interface,switch_type,model_no,price,quantity,description,picture) values ('$brand','$type','$interface','$switch_type','$model_no','$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Product Add Sucessful";

        ?>
    </body>
</html>