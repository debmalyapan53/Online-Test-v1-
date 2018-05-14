<?php
	session_start();
	if(isset($_POST['Login'])){
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"mydb");
	$name=$_POST['name'];
	$password=$_POST['pwd'];
	$result=mysqli_query($con,"select * from admin_info where name='$name' and password='$password'");
	if(mysqli_num_rows($result)){
		$_SESSION['admin']=$name;
			header("Location:verify1.php");
				}
		else
			echo "Invalid Admin ID!<br><br><a href='admin_login.htm'>Redirect to Admin Login page</a>";
		mysqli_close($con);
			}
	else
		header("Location:index.php");
?>