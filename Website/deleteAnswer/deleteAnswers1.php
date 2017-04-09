<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

input[type=text],input[type = number]{
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

<h2>Delete Answers</h2>
<form id="addquestions" action="deleteAnswers2.php" method="post">
  
  <div class="container">
    
    <b>Select the answer you want to delete</b>
    <select name="answer">
    <?php
    	include('../databaseInfo.php');
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);
	$sql = "select * from answers";
	$result =  mysqli_query($conn,$sql);
	$answers = array();
	
	//store information in an array
  	while($row = $row=mysqli_fetch_array($result)) {
		$answers[] = $row;
		
	}
	foreach($answers as $temp) {
		echo "<option value='" .$temp["name"]."'>" . $temp["name"]. "</option>";
	}
    
    ?>
    </select>
    <button type="submit">Next</button>
    
    <a href='../index.php'>Cancel</a>
  </div>

</form>
 
</body>
</html>
