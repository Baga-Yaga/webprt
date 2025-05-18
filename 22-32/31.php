<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed :" . $conn->connect_error);
}

if($_SERVER['REQUEST_METHOD']=="POST"){
	$username = $_POST['username'];
	$email = $_POST['email'];	

	$mysql = "insert into users (name, email) values ('$username' ,' $email')";

	if ($conn->query($mysql) === TRUE){
		echo "Data inserted Successfully";
	}
	else {
		echo "Error :". conn->error;
	}
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<body>
<form method="POST">
	<label>Enter UserName :</label>
	<input name="username" type="text" /><br><br>
	<label>Enter Email :</label>
	<input name="email" type="email" /><br><br>
	<input type="submit" />
</form>
</body>
</html>