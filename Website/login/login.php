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
    background-color:#ADD8E6;
}



</style>
<body>

<h2>Login</h2>
<form id="login" action="../index.php" method="post">
  
  <div class="container">
    
    <b>Username</b>
    <input type="text" placeholder="Enter Username" name="username" required>

    <b>Password</b>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <a href='../index.php'>Cancel</a>
  </div>

</form>

</body>
</html>
