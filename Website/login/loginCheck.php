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
			$mess = "wrong username or password";
		}
	echo $mess."<br>";
		    
	}
	session_start();
	if(!isset($_SESSION["username"])){
		echo "<a href='login/login.php'>Login</a>";		
	}
	else{
		echo "<a href='addAnswer/addAnswers.php'>Add Answers</a><br>";
		echo "<a href='addBuilding/addBuilding1.php'>Add Building</a><br>";
		echo "<a href='deleteAnswer/deleteAnswers1.php'>Delete Answers</a><br>";
		
		echo "<a href='deleteBuilding/deleteBuilding1.php'>Delete Building</a><br>";
		echo "<a href='logout.php'>Logout</a><br>";
	}

?> 
