<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['projector_brand_select'];
            $lumnes = $_POST['lumnes_select'];
            $display_technology = $_POST['display_technology_select'];
            $contrast_ratio = $_POST['contrast_ratio_select'];
            $model_no = $_POST['model'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/projector/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into projector(brand,lumnes,display_technology,contrast_ratio,model_no,price,quantity,description,picture) values ('$brand','$lumnes','$display_technology','$contrast_ratio','$model_no','$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Product Add Sucessful";

        ?>
    </body>
</html>