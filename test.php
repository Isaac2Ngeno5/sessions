<?php
	include "condb.php";
	$sql = "SELECT * FROM users WHERE email='script@gmail.com' AND password='1234'";
		//$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " email " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>