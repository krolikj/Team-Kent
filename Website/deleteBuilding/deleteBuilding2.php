<?php
	//Database info
	$host = 'localhost';
	$user = 'guest';
	$passward = '123456';
	$db = 'studint_services';
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);

	$answer = $_POST["answer"];
	
	$sql = "DELETE FROM buildings where next = '$answer'";
	if ($conn->query($sql) === TRUE) {
 		echo "record successfully deleted";

		

		$sql = "SELECT count(*) from answers where next >= $answer";
		$results = mysqli_query($conn,$sql);
		$ch[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch = $row2;
		}

		$sql = "SELECT count(*) from questions where id >= $answer";
		$results = mysqli_query($conn,$sql);
		$ch1[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch1 = $row2;
		}

		$count = 1;
		$count2 = 0;
		if($ch[0] >0){
			
			while($count <=$ch[0]){
				$sql = "update answers set next=$answer+$count2 where next=$answer+$count";
				$results = mysqli_query($conn,$sql);
				$count++;
				$count2++;
			}
		}
		$count = 1;
		$count2 = 0;
		if($ch1[0] >0){
			
			while($count <=$ch1[0]){
				$sql = "update questions set id=$answer+$count2 where id=$answer+$count";
				$results = mysqli_query($conn,$sql);
				$count++;
				$count2++;
			}
		}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	
	echo "<a href='../index.php'>Home Page</a>";
?>
