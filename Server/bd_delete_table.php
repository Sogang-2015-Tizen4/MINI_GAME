<?php
$servername = "localhost";
$username = "cs20101694";
$password = "qwer1234";
$dbname = "db_20101694";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connection Success";
}

echo "<br>";
// delete table
$sql = "DROP TABLE MyGuests";

// Check if table is delted
if($conn->query($sql) === TRUE) {
	echo "Table MyGuests deleted successfully";
} else {
	echo "Error deleting table : " . $conn->error;
}

$conn->close();
?>
