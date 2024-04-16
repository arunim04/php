<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="database123";
    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    if(!$conn)
    {die("Connection Failed:" . mysqli_connect_error());}

    if(isset($_POST['save'])){	
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $usetype = $_POST['use_type'];
        $fileup = $_FILES['fileup']['name'];
        $fileuptemp = $_FILES['fileup']['tmp_name'];
        $age = $_POST['age'];
        $car = $_POST['car'];
        $bio = $_POST['bio'];

        move_uploaded_file($fileuptemp,"./uploads/$fileup");

        $sql_query = "INSERT INTO `entry_details` (first_name,last_name,email,phone,gender,use_type,fileup,age,car,bio)
        VALUES ('$first_name','$last_name','$email','$phone','$gender','$usetype','$fileup','$age','$car','$bio')";

        if (mysqli_query($conn, $sql_query)) {

            echo"
            <script>alert('New Details Entry inserted successfully !'); </script>";
        } 
        else{
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Car Rental Form</title>
        <link rel="stylesheet" href="rentform.css" />
    </head>
    <body>
        <a href="DAhomepage.php"><img src=carrental_stockimage.jpg class="logo"></a>
        <h1>Car Rental Form</h1>
        <p>Please fill out this form with the required information</p>
        <form method="post" action='' enctype="multipart/form-data">
            <fieldset>
                <label for="first-name">Enter Your First Name: <input id="first-name" type="text" name="first_name" required />
                </label>
                <label for="last-name">Enter Your Last Name: <input id="last-name" type="text" name="last_name" required />
                </label>
                <label for="email">Enter Your Email: <input id="email" type="email" name="email" required />
                </label>
                <label for="phone">Enter Your Phone No.: <input id="phone" type="tel" name="phone" required />
                </label>
                <label for="gender">Select Your Gender:
                    <input class="inline" id="gender" type="radio" name="gender" value="Male" /> Male
                    <input class="inline" id="gender" type="radio" name="gender" value="Female" /> Female
                    <input class="inline" id="gender" type="radio" name="gender" value="Other" /> Other
                </label>
            </fieldset>
            <fieldset>
                <label for="use-type1"><input class="inline" id="use-type1" type="radio" name="use_type" value="Personal Use" /> Personal Use
                </label>
                <label for="use-type2"><input class="inline" id="use-type2" type="radio" name="use_type" value="Business Use" /> Business Use
                </label>
                <label for="terms-and-conditions">
                    <input class="inline" id="terms-and-conditions" type="checkbox" required /> I accept the <button id="open-btn"><u>terms and conditions</u></button>
                </label>
            </fieldset>
            <div id="modal-container">
                <div id="modal">
                    <p id="modal-text">1. The renter fully agrees to the terms and conditions of this contract and has received a copy thereof.
                            <br>
                        2. The renter has received the mentioned vehicle and its accessories in proper and safe condition.
                        <br>
                        3. Any delay in return of the vehicle will cause fine payement.
                        <br>
                        <u>Click anywhere to continue</u>
                    </p>
                </div>
            </div>
            <fieldset>
                <label for="id-proof">Upload a valid government id proof: <input id="id-proof" type="file" name="fileup" required/></label>
                <label for="age">Input your age (years): <input id="age" type="number" min="18" max="120" name="age" required /></label>
                <label for="car">Which car would you like to rent?
                    <select id="car" name="car" required>
                        <option value="">(select one)</option>
                        <option value="Grand i10">Grand i10</option>
                        <option value="Suzuki Swift">Suzuki Swift</option>
                        <option value="Innova">Innova</option>
                        <option value="Scorpio">Scorpio</option>
                        <option value="Tata Nexon">Tata Nexon</option>
                    </select>
                </label>
                <label for="bio">Few words about you(max 100 characters):
                <textarea id ="bio" rows="3" cols="30" placeholder="I am mr./mrs. and i work at..." name="bio" maxlength="100"></textarea>
                </label>
            </fieldset>
            <fieldset>
                <input type="submit" id="submit" name="save" value="Book Now"/>
            </fieldset>
        </form>
        <script src="rent.js"></script>
    </body>
</html>






