<?php
	session_start();
	if(!isset($_SESSION['admin'])){
		header("Location:index.php");
		exit;}
?>
<html>
	<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="table.css">
	</head>
	<body>
		<br><br>
		<form action='add.php' method='get'><input type='submit' value='Add/Remove Questions' name='add'></form>
		<form action='eval.php' method='get'><input type='submit' value='Result Evaluation' name='result'></form>
		<form action='logout.php' method='get'><input type='submit' value='Logout' name='logout' style='margin-left:0.5rem'></form>
	</body>
</html>
