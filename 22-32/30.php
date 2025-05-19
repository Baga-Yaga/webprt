<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$username = $_POST['username'];
	$email= $_POST['email'];

	setcookie("username",$username,time()+3600);
	setcookie("email",$email,time()+3600);
	header("Location: ".$_SERVER['PHP_SELF']); // Refresh to show updated cookies
    exit();

}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete_cookie'])) {
    setcookie("username", "", time() - 3600);
    setcookie("email", "", time() - 3600);
    header("Location: ".$_SERVER['PHP_SELF']); // Refresh to clear cookies
    exit();
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

<form method="POST" style="margin-top: 20px;">
    <input type="submit" name="delete_cookie" value="Delete Cookies" />
</form>

<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['email'])){
	echo "Logged in Successfully with Credes:--";
	echo "Username :". $_COOKIE['username'] . "<br>";
	echo "Email :". $_COOKIE['email']. "<br>";

} else {
    echo "<p>No cookie data found.</p>";
}


?>
	
</body>

</html>