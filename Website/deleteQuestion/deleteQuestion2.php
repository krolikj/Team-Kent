<html>
<head>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	color: #FFFFFF;
	font-weight: bold;
}
</style>
</head>


<?php
	include('../databaseInfo.php');
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);

	$answer = $_POST["answer"];
	
	$sql = "DELETE FROM questions where id = '$answer'";
	if ($conn->query($sql) === TRUE) {
 		echo "<p class='auto-style2' align='center'>Question deleted successfully</p>";

		

		$sql = "SELECT count(*) from answers where next >= $answer";
		$results = mysqli_query($conn,$sql);
		$ch[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch = $row2;
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
		$sql = "SELECT count(*) from questions where next >= $answer";
		$results = mysqli_query($conn,$sql);
		$ch1[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch1 = $row2;
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
		$count = 1;
		$count2 = 0;
		if($ch1[0] >0){
			
			while($count <=$ch1[0]){
				$sql = "update answers set q_id=$answer+$count2 where q_id=$answer+$count";
				$results = mysqli_query($conn,$sql);
				$count++;
				$count2++;
			}
		}
		$sql = "SELECT count(*) from buildings where next >= $answer";
		$results = mysqli_query($conn,$sql);
		$ch2[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch2 = $row2;
		}
		$sql = "SELECT count(*) from questions";
		$results = mysqli_query($conn,$sql);
		$ch3[0] =0;
		while($row2=mysqli_fetch_array($results)) {	  
			$ch3 = $row2;
		}
		$answer = $ch3[0];
		$count = 1;
		$count2 = 0;
		if($ch2[0] >0){
			
			while($count <=$ch2[0]){
				$sql = "update buildings set next=$answer+$count2 where next=$answer+$count";
				$results = mysqli_query($conn,$sql);
				$count++;
				$count2++;
			}
		}
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	?>
<body bgcolor="#2A2A44">
<form>
	<div class="auto-style1">
<button formaction="../index.php" style="width: 10%">Return Home</button>
	</div>
</form>
</html>

