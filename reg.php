<?php
	if(isset($_POST['Register'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$mobile=$_POST['mobile'];
		$password=$_POST['pwd'];
		$gender=$_POST['gender'];
		$password2=$_POST['pwd2'];
		if($password==$password2){		
			$con=mysqli_connect("localhost","root","");
			mysqli_select_db($con,"mydb");
			mysqli_query($con,"insert into user_info (name,email,day,month,year,mobile,password,gender) values('$name','$email','$day','$month','$year','$mobile','$password','$gender')");
			echo"<script>alert('Registration Successful!');</script>";
			header("Refresh: 0;URL='index.php'");
			mysqli_close($con);
		
				}
		else
			{echo"<script>alert('Password didnt match!');</script>";
			header("Refresh: 0;URL='registration.htm'");}
	}
	else
	{
		header("Location:index.php");
	}
?>
