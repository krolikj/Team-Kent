<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

input[type=text], input[type=password] {
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
	text-align: center;
}



</style>
<body bgcolor="#2A2A44">

<div class="auto-style2">

<h2 class="auto-style1">Login</h2>
<form id="login" action="../index.php" method="post">
  
  <div class="container">
    
    <b>Username</b><br>
    <input type="text" placeholder="Enter Username" name="username" required style="width: 50%"><br><br>

    <b>Password</b><br>
    <input type="password" placeholder="Enter Password" name="password" required style="width: 50%"><br><br>
        
    <button type="submit" style="width: 10%">Login</button>
    <button formaction="../index.php" style="width: 10%">Cancel</button>
  </div>

</form>

</div>

</body>
</html>
