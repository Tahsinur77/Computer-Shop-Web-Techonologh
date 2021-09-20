<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['Monitor_brand_select'];
            $refreshRate = $_POST['refresh_rate_select'];
            $inputType = $_POST['Input_type_select'];
            $resulation = $_POST['Display_resulation_select'];
            $model = $_POST['model'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/monitor/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into monitor(brand,refreshRate,inputType,resulation,model,price,quantity,description,picture) values ('$brand','$refreshRate','$inputType','$resulation','$model', '$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Monitor Add Sucessful";

        ?>
    </body>
</html>