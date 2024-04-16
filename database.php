<?php
	// Establish a connection to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database123";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check if the connection was successful
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve the data from the database
	$sql = "SELECT * FROM entry_details";
	$result = mysqli_query($conn, $sql);

	// Display the data in an HTML table
	if (mysqli_num_rows($result) > 0) {
		echo "<table align='center' border='1px'><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone No.</th><th>Gender</th><th>Use Type</th><th>File</th><th>Age</th><th>Car</th><th>Bio</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['gender']."</td><td>".$row['use_type']."</td><td>".$row['fileup']."</td><td>".$row['age']."</td><td>".$row['car']."</td><td>".$row['bio']."</td></tr>";
		}
		echo "</table><p align='center'>For more information <a href='http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=database123&table=entry_details'>click here</a></p>";
	} else {
		echo "No records found";
	}

	// Close the database connection
	mysqli_close($conn);
?>
