<?php
	//Database info
	$host = 'localhost';
	$user = 'guest';
	$passward = '123456';
	$db = 'studint_services';
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);
	
	$answer = $_POST["answer"];

	$sql = "DELETE FROM buildings where name = '$answer'";
	if ($conn->query($sql) === TRUE) {
 		echo "record successfully deleted";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	
	echo "<a href='../index.php'>Home Page</a>";
?>
