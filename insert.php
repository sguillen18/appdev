<?php
	
    include "testconfig.php";

    // Create connection
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    } 
	$name = $_GET["name"];
    $date = $_GET["date"];
    $time = $_GET["time"];
    $people = $_GET["number_of_people"];
    $notes = $_GET["notes"];
    $id = $_GET['id'];

	$sql = "INSERT INTO test_t (park_id,name, r_date, r_time, number_of_people, notes) VALUES (('$id'), ('$name'), ('$date'), ('$time'), ('$people'), ('$notes'))";
	
	if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>