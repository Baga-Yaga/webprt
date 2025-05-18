<!DOCTYPE html>
<html>
<body>

<h2>Simple Form (GET Method)</h2>

<form method="GET" action="">
    Name: <input type="text" name="name"><br><br>
    Age:  <input type="text" name="age"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo "<h3>Form Submitted:</h3>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>";
}
?>

</body>
</html>
