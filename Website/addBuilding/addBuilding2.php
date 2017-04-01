<?php
	//Database info
	$host = 'localhost';
	$user = 'guest';
	$passward = '123456';
	$db = 'studint_services';
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);

	
	$sql = "SELECT * FROM buildings ORDER BY next";
	$results = mysqli_query($conn,$sql);
	$next = 0;
	while($row2=mysqli_fetch_array($results)) {	  
		$next = $row2["next"];
         }
	$building = $_POST["building"];
	$next = $next + 1;
	$lat = $_POST["lat"];
	$lon = $_POST["lon"];

	$sql = "INSERT INTO buildings (name, next,latitude,longitude) 
			VALUES('$building','$next','$lat','$lon')";
	if ($conn->query($sql) === TRUE) {
 		echo "New record created successfully";
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	echo "<a href='../index.php'>Home Page</a>";
?>
