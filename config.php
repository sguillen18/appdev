<?php
$servername = "localhost";
$username = "edgarromero";
$password = "password";
$dbname = "ParksDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br/>";

$sql = "SELECT Park_Id FROM Park_t";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Park_Id"]." "."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>