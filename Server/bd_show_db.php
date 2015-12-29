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

// Create table
echo "<br>"; 
$sql = "SELECT id, name, userID, password, email, score1, score2,reg_date FROM MyGuests";
$result = $conn->query($sql);

if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "id : " . $row["id"].
		     "  / name : " . $row["name"].
		     "  / userID : " . $row["userID"].
		     "  / password : " . $row["password"].
	   	     "  / email : " . $row["email"].
		     "  / score1 : " . $row["score1"].
		     "  / score2 : " . $row["score2"].
		     "  / reg_date : " . $row["reg_date"].
		     "<br>";
	}
} else {
	echo "0 results";
}

$conn->close();
?>
