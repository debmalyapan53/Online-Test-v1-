<?php
	session_start();
	if(isset($_POST['Login'])){
		$name=$_POST['name'];
		$password=$_POST['pwd'];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"mydb");
		$result=mysqli_query($con,"select * from user_info where name='$name' and password='$password'");
		if(mysqli_num_rows($result)){
			$_SESSION['name']=$name;
			echo "Successfully Logged in!";
			echo "<br><br><form action='start.php' method='get'><input type='submit' value='Take the test' name='start'></form>";
			echo "<form action='logout.php' method='get'><input type='submit' value='Logout' name='logout' style='margin-left:0.5rem'></form>";
						}
		else
			echo "User not registered!<br><br><a href='login.htm'>Redirect to Login page</a>";
		mysqli_close($con);
			}
	else
		header("Location:login.htm");
?>
<link rel="stylesheet" type="text/css" href="table.css">