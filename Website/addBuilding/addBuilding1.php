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
    background-color:#ADD8E6;
}



</style>
<body>

<h2>Add a Building </h2>
<form id="addquestions" action="addBuilding2.php" method="post">
  
  <div class="container">
    <b>Building Name</b>
    <input type="text"  name="building" required>
    <b>Latitude</b>
    <input type="text"  name="lat" required>
    <b>Longitude</b>
    <input type="text"  name="lon" required>
    <button type="submit">Next</button>
    
    <a href='../index.php'>Cancel</a>
  </div>

</form>
 
</body>
</html>
