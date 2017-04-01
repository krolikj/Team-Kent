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
		$sql = "SELECT count(*) from answers where next >= $next";
		$results = mysqli_query($conn,$sql);
		$ch[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch = $row2;
		}
		$sql = "SELECT count(*) from questions where id >= $next";
		$results = mysqli_query($conn,$sql);
		$ch1[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch1 = $row2;
		}
		$count = $ch[0];
		$count2 = $ch[0]-1;
		if($ch[0] >0){
			
			while($count >=1){
				$sql = "update answers set next=$next+$count where next= $next+$count2";
				$results = mysqli_query($conn,$sql);
				
				$count--;
				$count2--;
			}
		}
		$count = $ch1[0];
		$count2 = $ch1[0]-1;
		if($ch1[0] >0){
			echo $count;
			echo $count2;
			while($count >=1){
				$sql = "update questions set id=$next+$count where id= $next+$count2";
				$results = mysqli_query($conn,$sql);
				
				$count--;
				$count2--;
			}
		
		}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	echo "<a href='../index.php'>Home Page</a>";
?>
