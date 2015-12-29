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
//    echo "Connection Success";
}

// set score
$myId = $myScore = " ";
$myId = $_POST["id"];
$myScore = $_POST["score1"];
$sql = "UPDATE MyGuests SET score1=$myScore WHERE userID='$myId'";
if($conn->query($sql) === TRUE) {
  echo "1";
} else {
  echo "-1";
}
$conn->close();
?>
