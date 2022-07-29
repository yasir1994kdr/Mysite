<?php

session_start();
if(!isset($_SESSION[username])){
	header('location:registration.php');
}
?>


<html>
<head>
<title> Home Page</title>	
	<link rel="stylesheet" type="text/css" 
	href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	</head>
	
<body>
	<div class"container">

	<a class="float-right" href="logout.php"> LOGOUT </a>
	<a class="float-left" href="index.html"> HOME </a>
	<h1> Welcome <?php echo $_SERVER['username'];?> </h1>	
	
</div>
		</body>


</html>