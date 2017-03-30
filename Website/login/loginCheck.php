<?php   

	//Database info
	$host = 'localhost';
	$user = 'guest';
	$passward = '123456';
	$db = 'studint_services';

	// Try and connect to the database
	$conn = mysqli_connect($host,$user,$passward,$db);
	$sql = "SELECT * FROM user";
	$result =  mysqli_query($conn,$sql);
	$user = array();
	
	 
	while($row=mysqli_fetch_array($result)) {
		$user[] = $row;
	}
	$mess = "Login";
	foreach($user as $temp) {
		if( empty($_POST) ) {
			break;
		}
		if($_POST["username"] == $temp["name"] && $_POST["password"] == $temp["password"]){
			session_start();
                	$the_username = $_POST["username"];
               		$_SESSION['username'] = $the_username;
			$mess = "";
			break; 
		}else{
			$mess = "wrong username or password, login again";
		}
	
		    
	}
	session_start();
	if(!isset($_SESSION["username"])){
		echo "<style> 
			input[type=checkbox]:checked + nav{
				height: 41px;
			}</style>";
		echo "<a href='login/login.php'>".$mess."</a>";		
	}
	else{	
		echo "<style> 
			input[type=checkbox]:checked + nav{
				height: 287px;
			}</style>";
		echo "<a href='addAnswer/addAnswers.php'>Add Answers</a>";
		echo "<a href='addBuilding/addBuilding1.php'>Add Building</a>";
		echo "<a href='addQuestion/addQuestion1.php'>Add Question</a>";
		echo "<a href='deleteAnswer/deleteAnswers1.php'>Delete Answers</a>";
		
		echo "<a href='deleteBuilding/deleteBuilding1.php'>Delete Building</a>";
		echo "<a href='logout.php'>Logout</a>";
		
	}

?> 
