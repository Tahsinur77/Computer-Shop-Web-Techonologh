<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['PowerSupply_brand_select'];
            $wattage = $_POST['PowerSupply_wattage_select'];
            $model = $_POST['model'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/powersupply/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into powersupply(brand,wattage,model,price,quantity,description,picture) values ('$brand','$wattage','$model', '$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Power Supply Add Sucessful";

        ?>
    </body>
</html>