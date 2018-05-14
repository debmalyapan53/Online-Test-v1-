<?php
	session_start();
	if(!isset($_SESSION['admin'])){
		header("Location:admin_login.htm");
		exit;}
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"mydb");
	echo"<br>Max Questions allowed: 5<br><form action='add.php' method='get'><input type='submit' name='clear' value='Clear All Questions' id='clear'><br><br>
	<input type='text' placeholder='Q_ID' name='qid' id='qid'>
	<input type='textarea' placeholder='Add a question' name='ques' id='ques'>
	<input type='submit' value='Add' name='Add'></form>
	<a href='verify1.php'>Go Back</a>";
	if(isset($_GET['clear'])){
		mysqli_query($con,"truncate table ques_table");}
	if(isset($_GET['Add'])){
		$question=$_GET['ques'];
		$qid=$_GET['qid'];
		mysqli_query($con,"INSERT INTO `ques_table` VALUES ('$qid','$question')");
		}
?>
<link rel="stylesheet" type="text/css" href="add.css">