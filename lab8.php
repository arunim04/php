<?php
	// Establish a connection to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lab";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check if the connection was successful
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Retrieve the data from the database
	$sql = "SELECT * FROM messages";
	$result = mysqli_query($conn, $sql);

	// Display the data in an HTML table
	if (mysqli_num_rows($result) > 0) {
		echo "<table><tr><th>Name</th><th>Email</th><th>Message</th></tr>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['message']."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "No records found";
	}

	// Close the database connection
	mysqli_close($conn);
?>
