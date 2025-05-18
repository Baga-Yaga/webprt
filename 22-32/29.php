<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['email'] = $_POST['email']; 
}
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


<?php
if(isset($_SESSION['username']) && isset($_SESSION['email'])){
	echo "Username is :" . $_SESSION['username'] . "<br>";
	echo "Email is :" . $_SESSION['email'] . "<br>";
}	

?>


</body>

</html>