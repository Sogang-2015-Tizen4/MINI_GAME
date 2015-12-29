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
    //echo "Connection Success";
}

// Create table
$sql = "SELECT name, userID, score1, score2 FROM MyGuests";
$result = $conn->query($sql);

if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["name"] . "/" .
		     $row["userID"] . "/" .
		     $row["score1"] . "/" .
		     $row["score2"] . "#";
	}
} else {
	echo "-1";
}
$conn->close();
?>
