<!DOCTYPE html>
<html>
<body>
<h1>$_POST form</h1>
<form method ="POST" action="">
	<label>Name :</label>
	<input type="text" name="name" placeholder="Enter Name " required></input><br><br>
	<label>CGPA :</label>
	<input type="number" name="cgpa" placeholder="Enter CGPA " required></input><br><br>
	<button type="submit">Submit</button>	

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	$name = $_POST['name'];
	$cgpa = $_POST['cgpa'];

	echo "<h2> Displaying data ....</h2>";
	echo "Name :" . htmlspecialchars($name) . "<br>";
	echo "CGPA :" . htmlspecialchars($cgpa) . "<br>";

}


?>
</body>
</html>


