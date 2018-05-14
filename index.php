<html>
<head>
	<title>Online Test</title>
        <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
	<header>
	<img src="images\online_test_series_jee_advanced_iitjee.jpg">
	</header>
	<br><br><center><h2>Announcements</h2></center>
	<a href="admin_login.htm"><input type="submit" value="Admin Login"></a><br>
	<a href="login.htm"><input type="submit" value="User Login"></a>
	<center>
	<ul>
	<li>Coming soon!!!</li>
	</ul>
	</center>
	<a href="registration.htm"><input type="submit" value="New Registration"></a><br>

	<footer>Designed by Debmalya</footer>
</body>
</html>
<?php		
	$con=mysqli_connect("localhost","root","");
	mysqli_query($con,"create database mydb");
	mysqli_select_db($con,"mydb");
	mysqli_query($con,"CREATE TABLE `admin_info` ( `name` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL, PRIMARY KEY (`name`) )");
	mysqli_query($con,"insert into `admin_info` values ('admin','password')");
	mysqli_query($con,"create table user_info(`name` VARCHAR(30) NOT NULL , `email` VARCHAR(30) NOT NULL , `day` INT NOT NULL , `month` INT NOT NULL , `year` INT NOT NULL , `mobile` BIGINT NOT NULL , `password` VARCHAR(30) NOT NULL , `gender` TEXT NOT NULL )");
	mysqli_query($con,"CREATE TABLE `ans_table` ( `aid` INT(10) NOT NULL , `answer` VARCHAR(100) NOT NULL , PRIMARY KEY (`aid`))");
	mysqli_query($con,"CREATE TABLE `ques_table` ( `qid` INT(10) NOT NULL AUTO_INCREMENT , `ques` VARCHAR(30) NOT NULL , PRIMARY KEY (`qid`))");
	mysqli_close($con);
?>