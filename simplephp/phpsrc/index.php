<?php
echo "Inside K8s with MySQL <br>";
$conn = new mysqli("wordpress-mysql", "root", "password", "school");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['name']."<br>";
	}
} else {
	echo "0 results";
}
$conn->close();