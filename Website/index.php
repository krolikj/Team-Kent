<html>
<head>
<?php header("Cache-Control: no-cache, must-revalidate");?>
<title>Capstone 467 Winter 2017 - GV Student Helper</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='custom.css' rel='stylesheet' type='text/css'>


</head>
<body>
<body>
<header class="clearfix">
	<div class="header-left">
		<h1>Capstone 467 Winter 2017 - GV Student Helper</h1>
	</div>
	<div class="header-right">
		<label for="open">
			<span class="hidden-desktop"></span>
		</label>
		<input type="checkbox" name="" id="open">
			<nav>
				<?php include('login/loginCheck.php'); ?>
			</nav>
		</div>
</header>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      
	
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
  line-height: 100%
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

button { 
  background:none;
  border:none; 
}
header{
	width: 100%;
	height: auto;
	background: #00008B;
}
.header-left,
.header-right{
	width: 100%;
	position: relative;
	text-align: center;
	color: white;
}

.header-right label{
	position: absolute;
	top: -3.7em;
	right: 0;
	cursor: pointer;
}
.header-right span{
	position: relative;
	width: 2em;
	height: 2em;
	background: white;
	
}
.header-right span:hover{
	background: #FF0000;
}
.header-right span:before,
.header-right span:after{
	content: '';
	position: absolute;
	width: 2em;
	height: .5em;
	top: 4px;
	left: 0;
	background: #00008B;
}
.header-right span:after{
	top: 16px;
}

#open{
	display: none;
}

.hidden-desktop{
	display: block;
}

nav{
	line-height: 40px;
	height: 0;
	overflow: hidden;
}

nav>a{
	color: white;
	padding: 0 1em;
	display: block;	
}
nav>a:hover{
	background: #eeefff;
	color: #FF0000;
}
</style>

      

      <div id="errdiv"></div>
      <table id="qTable">
      
  	<?php include('backend.php'); ?>

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
<script type="text/javascript"> var buildingsInfo =<?php echo json_encode($buildings); ?>; </script>
<script type="text/javascript"> var name[] =<?php echo json_encode($name); ?>; </script>
<script type="text/javascript"> var lat[] =<?php echo json_encode($lat); ?>; </script>
<script type="text/javascript"> var lng[] =<?php echo json_encode($lng); ?>; </script>
<script src="custom.js"> </script> 
<script src="tree.js"></script>
</body>
</html>
