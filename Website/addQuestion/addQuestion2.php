<?php
	//Database info
	$host = 'localhost';
	$user = 'guest';
	$passward = '123456';
	$db = 'studint_services';
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);

	
	$sql = "SELECT count(*) FROM questions";
	$results = mysqli_query($conn,$sql);
	$ch[0] = 0;
	while($row2=mysqli_fetch_array($results)) {	  
		$ch = $row2;
        }

	$next = $ch[0]+1;
	
	$question = $_POST["question"];

	$sql = "INSERT INTO questions(id,name) 
			VALUES('$next','$question')";
	if ($conn->query($sql) === TRUE) {
 		echo "New record created successfully";
		
		$sql = "SELECT count(*) from answers where next >= $next";
		$results = mysqli_query($conn,$sql);
		$ch[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch = $row2;
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
		
		$sql = "SELECT count(*) from buildings where next >= $next";
		$results = mysqli_query($conn,$sql);
		$ch1[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch1 = $row2;
		}
		$count = $ch1[0];
		$count2 = $ch1[0]-1;
		if($ch1[0] >0){
			
			while($count >=1){
				$sql = "update buildings set next=$next+$count where next= $next+$count2";
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
