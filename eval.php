<?php
	session_start();
	if(!isset($_SESSION['admin'])){
		header("Location:index.php");
		exit;}
?>
<html>
<head><title>Evaluation</title>
<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
	<center><p><h1>Evaluation</h1></p></center><br><br><br>
	<?php
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"mydb");		
		echo  "<table>
			<th>Q_ID</th>
			<th>QUESTION</th>
			<th>ANSWER</th>";
		for($i=1;$i<=5;$i++){
			$result=mysqli_fetch_array(mysqli_query($con,"select qid,ques,answer from ques_table,ans_table where qid=aid and qid='$i' and aid='$i'"));
			echo "	<tr>
					<td>".$result['qid']."</td>
					<td>".$result['ques']."</td>
					<td>".$result['answer']."</td>
				</tr>";
					}
			echo "</table>";
		mysqli_close($con);
	?>
	<br><br><br>
	<a href='verify1.php'>Go Back</a>
</body>
</html>
					