<html>

<head>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	color: #FFFFFF;
}
</style>
</head>

<?php
session_start();
session_destroy();

?>
<body bgcolor="#2A2A44">
<div class="auto-style1">
<form>
<p><span class="auto-style2"><b>You have successfully logged out</b></span></p>
<button formaction='index.php' style='width: 10%'>Return Home</button>
</form>
</div>

</html>