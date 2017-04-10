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
	
	$answer = $_POST["answers"];
	$next = $_POST["question"];
	$qid = $_POST["qid"];
	$sizee = sizeof($answer);
	$n = 0;
	while($n < $sizee){
		$sql = "INSERT INTO answers (name, next,q_id) 
			VALUES('$answer[$n]','$next[$n]','$qid')";
		if ($conn->query($sql) === TRUE) {
 			echo "<p class='auto-style2' align='center'>Answer added successfully</p>";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$n++;
	}
?>
<div class="auto-style1">
<form>
<body bgcolor="#2A2A44">
<button formaction="../index.php" style="width: 10%">Return Home</button>
</form>
	</div>

</html>
