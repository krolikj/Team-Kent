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
	echo $answer."<br>";
	$sql = "DELETE FROM answers where name='$answer'";
	if ($conn->query($sql) === TRUE) {
 		echo "<p class='auto-style2' align='center'>Answer deleted successfully</p>";
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

