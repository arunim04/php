<!DOCTYPE html>
<html lang="en">
<head>
    <title>DA Car Rental Project Home Page</title>
    <link rel="stylesheet" href="DAhomepagestyle.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src=carrental_stockimage.jpg class="logo">
            <ul>
            <li><a href="cardetails.php">Available_Vehicles</a></li>
            <li><a href="#">Contact US</a></li>
            <li><a href="#">About Us</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>RENT A VEHICLE</h1>
            <p>Rent a vehicle from our wide collection to fit your needs,<br>at unmatched prices </p>
            <div>
                <button type="button" onclick="window.location.href = 'rentalform.php';"><span></span>Rent Now</button>
                <button type="button" onclick="window.location.href = 'cardetails.php';"><span></span>Price List</button>
                <button type="button" onclick="window.location.href = 'login.php';"><span></span>Admin Login</button>
            </div>
        </div>
        <div class="content2">
            <p>This Website is part of IT2201,IT2203 and IT2232 coursework and does not operate as an actual commercial website</p>
        </div>
    </div>
</body>
</html>