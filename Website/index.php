<html>
<head>
<title>Capstone 467 Winter 2017 - GV Student Helper</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='custom.css' rel='stylesheet' type='text/css'>
</head>
<body>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h1>Capstone 467 Winter 2017 - GV Student Helper </a></h1>
      <style>
#qTable td {
  padding: 5px 1em;
  border-radius: 5px;
  background-color: #eeefff;
  font-family: "Segoe UI"
}

#qTable {
  width: 100%;
  border-spacing: 0.5em
}

#qTable li {
  cursor: pointer
}

#qTable li:hover {
  text-decoration: underline
}

#qTable tr:nth-child(n+2) {
  display: none
}

#qTable p {
  font-weight: bold;
  line-height: 50%
}

#errdiv {
  display: none;
  font-weight: bold;
  color: #903;
  padding: 0.3em
}

.selectedAnswer {
  font-weight: bold;
  color: #0d0f3a
}

i {
  display: none
}

</style>
      <div id="errdiv"></div>
      <table id="qTable">
      

      <!-- ******php code******-->
      <?php 
	//Database info
	$host = 'localhost';
	$user = 'guest';
	$passward = '123456';
	$db = 'studint_services';
	
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

	//quary - tutoring info
	$sql2 = "SELECT * FROM tutoring_locations";
	$result = mysqli_query($conn,$sql2);

	while($row2=mysqli_fetch_array($result)) {
		$buildin_name;

		foreach($buildings as $temp) {
			if($temp["next"] === $row2["building"]){
				$buildin_name = $temp["name"];
				
			}
		}

		echo "<tr><td><b>" . $row2["name"] . "</b><br>";
		echo $buildin_name . ": " . $row2["room"] . "<br>";
		
		// print phone if avalable
		if(strcmp($row2["phone"], "-") !== 0) {
			echo "Phone: " . $row2["phone"] ;
		}
		echo "</td></tr>";

	}
	
	
	//quary - atm info
	$sql2 = "SELECT * FROM atm_locations";
	$result = mysqli_query($conn,$sql2);

	while($row2=mysqli_fetch_array($result)) {
		$atm = explode(",", $row2["locations"]);
		echo "<tr><td>";
		foreach($atm  as $temp) {
			
			foreach($buildings as $btemp) {
				if($btemp["next"] == $temp){
					$buildin_name = $btemp["name"];
				}
			}
			echo "<strong>";
			echo $buildin_name;
			echo "</strong> <br>";
			
		}
		echo "</td></tr>";
        
          
	}
	
	
	//quary - get and print buildings name
	$sql = "SELECT * FROM buildings ORDER BY next";
	$result = mysqli_query($conn,$sql);
	while($row2=mysqli_fetch_array($result)) {
		  echo "<tr><td><strong>";
		  echo $row2["name"];
		  echo "</strong></td></tr>";
		  
         }

	
	?>
        <!-- ******end of php code******-->

      </table>
      <p> <br>
        <br>
        <strong>currently scheduled for sprint 3 </strong> </p>
      <p>The map will update to show the locations for the results of the decision tree.</p>
    </div>
    <!-- /.8 --> 
    
  </div>
  <!-- /.row--> 
  
</div>
<!-- /.container-->

<div id="map"></div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBItn1cFWKbaAIFdY2XKr-jD_bqeWB-yRs" type="text/javascript"></script> 
<script src="custom.js"></script> 
<script src="tree.js"></script>
</body>
</html>
