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
	text-align: center;
}



.auto-style2 {
	padding: 20px;
	background-color: #2a2a44;
	text-align: center;
}



</style>
<body bgcolor="#2A2A44">

<h2 class="auto-style1">Add a Building </h2>
<form id="addquestions" action="addBuilding2.php" method="post">
  
  <div class="auto-style2">
    <b>Building Name</b><br>
    <input type="text"  name="building" required style="width: 30%"><br><br>
    <b>Latitude</b><br>
    <input type="text"  name="lat" required style="width: 30%"><br><br>
    <b>Longitude</b><br>
    <input type="text"  name="lon" required style="width: 30%"><br><br>
    
    <button type="submit" style="width: 10%">Next</button>
    <button formaction="../index.php" style="width: 10%">Cancel</button>

  </div>

</form>
 
</body>
</html>
