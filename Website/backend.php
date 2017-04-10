        <?php 
	include('databaseInfo.php');
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);
	
	//quary1 - get questions and ids
	$sql = "SELECT * FROM questions";
	$result =  mysqli_query($conn,$sql);
	$questions = array();
	
	//store information in an array
  	while($row = $row=mysqli_fetch_array($result)) {
		$questions[] = $row;
	}
	//quary2 - get list of answers for each question - get next table 
	foreach($questions as $temp) {
		//Question ID
		$s = $temp["id"];
	  	if($s != 8){
			$sql2 = "SELECT * FROM answers WHERE q_id =$s ";
	  	
          	}else{
			$sql2 = "SELECT * FROM buildings ";
		}
	  	$result = mysqli_query($conn,$sql2);
	  
	  	//print the question
	  	echo "<tr><td><p>" . $temp["name"]. "<p> </p>";
	  	echo "<ul>";  
	  	
	  	//print answers for that question 
	  	while($row2=mysqli_fetch_array($result)) {
		  
	  		echo "<li>". $row2["name"] . "<i>" . $row2["next"] . "</i></li>";  
		  	  
		}
		
	echo "</ul>";
	echo "</td></tr>";
		
	}
	
	
	//quary - get buildings
	$sql = "SELECT * FROM buildings";
	$result =  mysqli_query($conn,$sql);
	$buildings= array();
	
	//store information in an array
  	while ($row=mysqli_fetch_array($result)) {
		$buildings[] = $row;
	}
	
	
	
	//quary - get and print buildings name
	$sql = "SELECT * FROM buildings ORDER BY next";
	$results = mysqli_query($conn,$sql);
	while($row2=mysqli_fetch_array($results)) {
		  echo "<tr><td><strong>";
                  echo "<button id=". $row2["next"].">";
		  echo $row2["name"];
		  echo "</button></strong></td></tr>";
		  
		  	  
        }
	$lol = "test var";
	$lat = array_column($results, "latitude");
	$lng = array_column($results, "longitude");
	$name = array_column($results, "name");
	
	
?>
