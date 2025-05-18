<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Insert
if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New user added successfully.<br>";
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

// Handle Update
if (isset($_POST['action']) && $_POST['action'] == 'update') {
    $id = (int)$_POST['id'];
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully.<br>";
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

// Handle Delete
if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $id = (int)$_POST['id'];

    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully.<br>";
    } else {
        echo "Error: " . $conn->error . "<br>";
    }
}

// Fetch all users for display
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px;}
    </style>
</head>
<body>

<h2>Add User</h2>
<form method="POST">
    <input type="hidden" name="action" value="add">
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <input type="submit" value="Add User">
</form>

<hr>

<h2>Update User</h2>
<form method="POST">
    <input type="hidden" name="action" value="update">
    ID: <input type="number" name="id" required>
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    <input type="submit" value="Update User">
</form>

<hr>

<h2>Delete User</h2>
<form method="POST">
    <input type="hidden" name="action" value="delete">
    ID: <input type="number" name="id" required>
    <input type="submit" value="Delete User">
</form>

<hr>

<h2>Users List</h2>
<?php
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>" .
             "<td>" . htmlspecialchars($row['id']) . "</td>" .
             "<td>" . htmlspecialchars($row['name']) . "</td>" .
             "<td>" . htmlspecialchars($row['email']) . "</td>" .
             "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
?>

</body>
</html>
