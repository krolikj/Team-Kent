<?php
	include('databaseInfo.php');
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);

	$answer = $_POST["answer"];
	
	$sql = "DELETE FROM buildings where next = '$answer'";
	if ($conn->query($sql) === TRUE) {
 		echo "record successfully deleted";

		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	
	echo "<a href='../index.php'>Home Page</a>";
?>
