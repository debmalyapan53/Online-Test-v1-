<?php
	session_start();
	if(!isset($_SESSION['name'])){
		header("Location:login.htm");
		exit;}
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"mydb");
?>
<html>
	<head>
		<title>Test</title>
	<link rel="stylesheet" type="text/css" href="table.css">
	</head>
<body>
	<form action="start.php" method="get">
	<p><h1 style="text-align:center">Test</h1></p>
	<br><br>
	<table>
		<th>Q_ID</th>
		<th>QUESTION</th>
		<th>ANSWER</th>
		<?php 
			for($i=0;$i<mysqli_num_rows(mysqli_query($con,"select * from ques_table"));$i++)
			{
				$qid=$i+1;
				$question=mysqli_fetch_array(mysqli_query($con,"select ques from ques_table where qid=$qid"));
				echo "<tr>";
				echo "<td>".$qid.".</td>";
				echo "<td>".$question['ques']."</td>";
				echo "<td><input type='textarea' name='answer".$qid."'></td>";
				echo "</tr>";
			}
		?>
	</table>
	<br>
	<input type="submit" value="Submit" name="Submit"><br>
</form>
</body>
</html>
<?php 
	if(isset($_GET['Submit'])){
	$var1=$_GET['answer1'];
	$var2=$_GET['answer2'];
	$var3=$_GET['answer3'];
	$var4=$_GET['answer4'];
	$var5=$_GET['answer5'];
	mysqli_query($con,"truncate table ans_table");
	mysqli_query($con,"insert into ans_table values('1','$var1')");
	mysqli_query($con,"insert into ans_table values('2','$var2')");
	mysqli_query($con,"insert into ans_table values('3','$var3')");
	mysqli_query($con,"insert into ans_table values('4','$var4')");
	mysqli_query($con,"insert into ans_table values('5','$var5')");
	header('Location:eval.php');
	}
?>