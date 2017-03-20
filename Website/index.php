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
<?php 
$tt = "hellow"; 
?>
<div id="map"></div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBItn1cFWKbaAIFdY2XKr-jD_bqeWB-yRs" type="text/javascript"></script> 
<script type="text/javascript"> var buildingsInfo =<?php echo json_encode($buildings); ?>; </script>
<script type="text/javascript"> var name[] =<?php echo json_encode($name); ?>; </script>
<script type="text/javascript"> var lat[] =<?php echo json_encode($lat); ?>; </script>
<script type="text/javascript"> var lng[] =<?php echo json_encode($lng); ?>; </script>
<script src="custom.js"></script> 
<script src="tree.js"></script>
</body>
</html>
