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

	
      ?>
	<!-- ******end of php code******-->


<!-- t9-->
        <tr>
          <td><b>The Math Center</b><br>
            Mackinac Hall: A-2-601<br>
            Phone: 616-331-2084 </td>
        </tr>

<!-- t10-->
        <tr>
          <td><b>The Stats Center</b><br>
            Mackinac Hall: A-2-101<br>
            Phone: 616-331-8969 </td>
        </tr>

<!-- t11-->
        <tr>
          <td><b>Science Tutoring</b><br>
            Student Services: 200<br>
            Phone: 616-331-3440 </td>
        </tr>

<!-- t12-->
        <tr>
          <td><b>The Chemistry Success Center</b><br>
            Padnos Hall: 312<br>
            Phone: 616-331-3317 </td>
        </tr>

<!-- t13-->
        <tr>
          <td><b>The Writing Center</b><br>
            Lake Ontario Hall: 120<br>
            Phone: 616-331-2922</td>
        </tr>

        <tr>
          <td><b>The Speech Lab</b><br>
            Lake Michigan Hall: 154 </td>
        </tr>

        <tr>
          <td><b>Accounting Tutoring</b><br>
            Seidman: 2018 </td>
        </tr>

        <tr>
          <td><b>CIS Student Success Center</b><br>
            Mackinac Hall: C-2-205 </td>
        </tr>

        <tr>
          <td><b>Economics Tutoring</b><br>
            Seidman: 3060</td>
        </tr>

        <tr>
          <td><b>Finance Tutoring</b><br>
            Seidman: 3025 </td>
        </tr>

        <tr>
          <td><strong>The Commons - Lower Level</strong> <br>
            <strong>Kleiner Commons</strong> <br>
            <strong>Laker Marketplace</strong> <br>
            <strong>Kirkhof Center</strong></td>
        </tr>

        <tr>
          <td><strong>Kirkhof Center</strong></td>
        </tr>

        <tr>
          <td><strong>Kirkhof Center</strong> <br>
            <strong>The Connection</strong></td>
        </tr>
	
        <!-- ******php code******-->
	<?php
	
	//quary - get and print buildings name
	$sql = "SELECT * FROM buildings ORDER BY next";
	$result = mysqli_query($conn,$sql);
	while($row2=mysqli_fetch_array($result)) {
		  echo "<tr><td><strong>";
		  echo $row2["name"];
		  echo "</strong></td></tr>";
		  
         }

	//close the connection to the databace
	$conn->close();
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

