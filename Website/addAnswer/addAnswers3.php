<?php
	include('databaseInfo.php');
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);
	
	$answer = $_POST["answers"];
	$next = $_POST["question"];
	$qid = $_POST["qid"];
	$sizee = sizeof($answer);
	$n = 0;
	while($n < $sizee){
		$sql = "INSERT INTO answers (name, next,q_id) 
			VALUES('$answer[$n]','$next[$n]','$qid')";
		if ($conn->query($sql) === TRUE) {
 			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$n++;
	}
	
	echo "<a href='../index.php'>Home Page</a>";
?>
