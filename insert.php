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
    $number_of_poeple = $_GET["number_of_people"];
    $notes = $_GET["notes"];

	$sql = "INSERT INTO test_t (name, date, time, number_of_people, notes) VALUES [('$name'), ('$date'), ('$time'), ('$number_of_people'), ('$notes')";
	
	if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>