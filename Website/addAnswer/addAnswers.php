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
    background-color:#2a2a44;
}
a{
    color: white;
}
b{
    color: white;
}




.auto-style1 {
	color: #FFFFFF;
}




.auto-style2 {
	padding: 20px;
	background-color: #2a2a44;
	text-align: center;
}




</style>
<body bgcolor="#2A2A44">

<h2 class="auto-style1">Add Answers to a Question </h2>
<form id="addquestions" action="addAnswers2.php" method="post">
  
  <div class="auto-style2">
    
    <b>Select question</b><br>
    <select name="question" style="width: 50%">
    <?php
   	include('../databaseInfo.php');
	
	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);
	$sql = "SELECT * FROM questions";
	$result =  mysqli_query($conn,$sql);
	$questions = array();
	
	//store information in an array
  	while($row = $row=mysqli_fetch_array($result)) {
		$questions[] = $row;
		
	}
	foreach($questions as $temp) {
		echo "<option value=" .$temp["id"].">" . $temp["name"]. "</option>";
	}
    
    ?>
    </select><br>
    <b>How many Answers do you want to add?</b><br>
    <input type="number" name="Num" style="width: 10%"><br>
    
    <button type="submit" style="width: 10%">Next</button>
    <button formaction="../index.php" style="width: 10%">Cancel</button>
    </div>

 </form>
</body>
</html>
