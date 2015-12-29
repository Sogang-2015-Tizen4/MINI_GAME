<?php
//header("Access-Control-Allow-Origin: *");

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
// Insert data
$name = $id = $password = $email = " ";
$score1 = 0;
$score2 = 0;
$name = $_POST["name"];
$id = $_POST["id"];
$password = $_POST["password"];
$email = $_POST["email"];

if($name==NULL or $id==NULL or $password==NULL or $email==NULL) {
	echo -1;
	$conn->close();
	return;
}

// check if same id is already in DB
$sql = "SELECT id FROM MyGuests WHERE userID='$id'";
$result = $conn->query($sql);
$count = $result->num_rows;

if($count > 0) {
	echo "0";
	$conn->close();
	return;
}

// insert data  
$sql = "INSERT INTO MyGuests (name, userID, password, email, score1, score2)
VALUES ('$name', '$id', '$password', '$email', '$score1', '$score2')";
if($conn->query($sql) === TRUE) {
	echo "1";
} else {
	echo "Error : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
