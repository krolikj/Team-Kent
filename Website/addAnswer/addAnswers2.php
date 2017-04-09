<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

input[type=text]{
    width: 100%;
    padding: 12px;

}

button {
    width: 100%;
    padding: 14px 20px;
    background-color: #999;
    color: white;
    margin: 8px 0;
    
   
}
select{
    width: 100%;
    padding: 14px 20px;
    margin: 8px 0;
}

button:hover {
    opacity: 0.5;
}
.container {
    padding:20px;
    background-color:#00008B;
}
a{
    color: white;
}
b{
    color: white;
}



</style>
<body>

<h2>Add Answers to A Question </h2>
<form id="addquestions" action="addAnswers3.php" method="post">
  
  <div class="container">
    
    <?php
	echo "<input type='hidden' name='qid' value=" ;
    	echo $_POST["question"];
	echo ">";
    ?>
    
    
    <?php 

	include('../databaseInfo.php');
	  
	$temp = $_POST["Num"];
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);

	$sql = "SELECT * FROM questions";
	$result =  mysqli_query($conn,$sql);
	$questions = array();
	//store information in an array
  	while($row = $row=mysqli_fetch_array($result)) {
		$questions[] = $row;
		
	}
	$sql = "SELECT * FROM buildings";
	$result =  mysqli_query($conn,$sql);
	$buildings = array();
	//store information in an array
  	while($row = $row=mysqli_fetch_array($result)) {
		$buildings[] = $row;
		
	}
	
	while($temp > 0){
		echo "<b>Add the answer and Select next table<b>";
		echo "<input type='text'  name='answers[]' >";
		
		echo "<select name='question[]'>";

		foreach($questions as $temp1) {
			echo "<option value=" .$temp1["id"].">" . $temp1["name"]. "</option>";
		}
		foreach($buildings as $temp1) {
			echo "<option value=" .$temp1["next"].">" . $temp1["name"]. "</option>";
		}
		
		
		echo "</select>";
	$temp--;
	} 
    ?>
    
    
    <button type="submit">Next</button>
    
    <a href='../index.php'>Cancel</a>
  </div>

</form>
 
</body>
</html>
