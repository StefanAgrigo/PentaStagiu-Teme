<?php

global $pdo;
require 'db_config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $statement->execute([$username, $password]);

    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" value="Register">
</form>
<p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>
