<html>

<head>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
</head>

<?php
	include('../databaseInfo.php');
	
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
 		echo "<p class='auto-style2' align='center'>Building added successfully</p>";
		
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
