<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $brand = $_POST['Processor_brand_select'];
            $model = $_POST['model'];
            $clockSpeed = $_POST['clockSpeed'];
            $core = $_POST['core'];
            $thread = $_POST['thread'];
            $tdp = $_POST['tdp'];

            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            

            if(isset($_POST["insert"])){
                $file = basename($_FILES["image"]["name"]);
                $image_Path = "../../PresentationLayer/picture/processor/".basename($file);
                move_uploaded_file($_FILES['image']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }


            $add = "insert into processor(brand,model,clockSpeed,core,thread,tdp,price,quantity,description,picture) values ('$brand','$model','$clockSpeed','$core','$thread','$tdp', '$price','$quantity','$description','$file')";
            mysqli_query($con,$add);
            echo "Processor Add Sucessful";

        ?>
    </body>
</html>