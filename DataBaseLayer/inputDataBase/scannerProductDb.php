<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['scanner_brand_select'];
            $speed = $_POST['scanner_speed_select'];
            $resoulation = $_POST['scanner_resoulation_select'];
            $connectivity = $_POST['scanner_connectivity_select'];
            $model_no = $_POST['model'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/scanner/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into scanner(brand,speed,resoulation,connectivity,model_no,price,quantity,description,picture) values ('$brand','$speed','$resoulation','$connectivity','$model_no','$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Product Add Sucessful";

        ?>
    </body>
</html>