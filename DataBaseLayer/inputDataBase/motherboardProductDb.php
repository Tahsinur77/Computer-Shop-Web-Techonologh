<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['motherboard_Brand_select'];
            $type = $_POST['motherboard_form_factor_select'];
            $model = $_POST['model'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/motherboard/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into motherboard(brand,type,model,price,quantity,description,picture) values ('$brand','$type','$model', '$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Product Add Sucessful";

        ?>
    </body>
</html>