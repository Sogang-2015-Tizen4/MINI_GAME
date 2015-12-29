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
else {
//    echo "Connection Success";
}

// login
$myId = $myPassword = " ";
$myId = $_POST["id"];
$myPassword = $_POST["password"];

if($myId==NULL or $myPassword==NULL) {
	echo "-1";
	return;
}

$sql = "SELECT name, userID, score1, score2 FROM MyGuests WHERE userID='$myId' and password='$myPassword'";
$result = $conn->query($sql);
$count = $result->num_rows;
echo $count;
if($count==1) {
// name / ID / score
$row = $result->fetch_assoc();
echo "/" . $row["name"] . "#" . $row["userID"] . "#" . $row["score1"] . "#" .$row["score2"];
}
$conn->close();
?>
