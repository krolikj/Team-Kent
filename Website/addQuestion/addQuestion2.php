<?php
	//Database info
	$host = 'localhost';
	$user = 'guest';
	$passward = '123456';
	$db = 'studint_services';
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);

	
	$sql = "SELECT count(*) FROM questions where id >8";
	$results = mysqli_query($conn,$sql);
	$ch[0] = 0;
	while($row2=mysqli_fetch_array($results)) {	  
		$ch = $row2;
        }

	$sql = "SELECT * FROM buildings ORDER BY next";
	$results = mysqli_query($conn,$sql);
	$next = 0;
	while($row2=mysqli_fetch_array($results)) {	  
		$next = $row2["next"];
        }
	$next = $next + $ch[0]+1;
	
	$question = $_POST["question"];

	$sql = "INSERT INTO questions(id,name) 
			VALUES('$next','$question')";
	if ($conn->query($sql) === TRUE) {
 		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	echo "<a href='../index.php'>Home Page</a>";
?>
