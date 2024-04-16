<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="database123";
    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    if(!$conn)
    {die("Connection Failed:" . mysqli_connect_error());}

   

    if(isset($_POST['save'])){	
        $first_name = $_POST['first-name'];
        $last_name = $_POST['last-name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $usetype = $_POST['use-type'];
        $fileup = $_POST['file'];
        $age = $_POST['age'];
        $car = $_POST['car'];
        $bio = $_POST['bio'];

        $sql_query = "INSERT INTO `entry_details` ('first-name','last-name',email,phone,gender,usetype,'file',age,car,bio)
        VALUES ('$first_name','$last_name','$email','$phone','$gender','$usetype','$fileup','$age','$car','$bio')";

        if (mysqli_query($conn, $sql_query)) {
            echo "New Details Entry inserted successfully !";
        } 
        else{
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>