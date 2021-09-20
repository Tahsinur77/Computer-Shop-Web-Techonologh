<html>
    <head>

    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","");

            mysqli_select_db($con,'computershop');
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $birth = $_POST['birth'];
            $address = $_POST['address'];
            $userType = "user";
            
            $name = $fname." ".$lname;
            if(isset($_POST["insert"])){
                $file = basename($_FILES["pic"]["name"]);
                $image_Path = "../../PresentationLayer/picture/user/".basename($file);
                move_uploaded_file($_FILES['pic']['tmp_name'], $image_Path);
            }
            else{
                $file ="";
            }

            $s = "SELECT * FROM user WHERE email = '$email' "; 

            $result = mysqli_query($con,$s);
            $num = mysqli_num_rows($result);
            //echo $num;

            if($num==1) {
              echo "Already have an account";
              header('location:../../PresentationLayer/HTML/Registrationv2.php');
            }
            else{
              $add = "insert into user(userType,name,email,phoneNumber,gender,dateOfBirth,address,picture,password) values ('$userType','$name','$email', '$phone','$gender','$birth','$address','$file','$password')";
              mysqli_query($con,$add);
              echo "User Add Sucessful";
              header('location:../../PresentationLayer/HTML/Login.php');

            }

            

        ?>
    </body>
</html>