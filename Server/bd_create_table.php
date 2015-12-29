<?php
$servername = "localhost";
$username = "cs20101694";
$password = "qwer1234";
$dbname = "db_20101694";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo conn;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection Success";
}
echo"<br>";

// Create table
$sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	userID VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	score1 INT(6),
	score2 INT(6),
	reg_date TIMESTAMP  
)";

// Check if table is created
if($conn->query($sql) === TRUE) {
	echo "Table MyGuests created successfully";
} else {
	echo "Error creating table : " . $conn->error;
}
$conn->close();
?>
