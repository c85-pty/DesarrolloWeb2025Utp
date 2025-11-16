<!DOCTYPE html>
<html>

<head>TEST</head>

<body>
	<h1>Hola Mundo Docker 2025!</h1>
	<hr />
	<?php echo "prueba php! " . phpversion(); ?>
	<hr />
	<?php //phpinfo(); 
	?>
	<hr />

	<?php
	$servername = "db:3306";
	$username = "my_user";
	$password = "my_password";
	$dbname = "my_database";

	// Create connection
	//$conn = mysqli_connect($servername, $username, $password);
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";

	$sql = "SELECT id, firstname, lastname FROM MyGuests";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<table border="1">';
		echo "<tr><th>ID</th><th>NOMBRE</th><th>APELLIDO</th></tr>";
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			//echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
			echo "<tr>";
			echo "<td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td>";
			echo "<tr/>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	$conn->close();
	?>

</body>

</html>

