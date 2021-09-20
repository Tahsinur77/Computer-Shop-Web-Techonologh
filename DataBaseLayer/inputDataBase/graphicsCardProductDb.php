<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['Graphics_brand_select'];
            $capacity = $_POST['graphics_capacity_select'];
            $type = $_POST['memory_type_select']; 
            $model = $_POST['model'];
            $clockSpeed=$_POST['clockSpeed'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/graphics/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into graphicscard(brand,capacity,type,model,clockSpeed,price,quantity,description,picture) values ('$brand','$capacity','$type','$model','$clockSpeed', '$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Graphics Card Add Sucessful";

        ?>
    </body>
</html>