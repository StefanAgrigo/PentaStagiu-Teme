<?php

global $pdo;
session_start();
if (!isset($_SESSION['userd_id'])){
    header("Location: login.php");
    exit;
}

require 'db_config.php';

$user_id= $_SESSION['user_id'];
$stmt= $pdo->prepare("SELECT username FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user= $stmt->fetch();

$username= $user['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
<h2>Welcome, <?php echo $username; ?>!</h2>
<p>This is your profile page.</p>
<a href="logout.php">Logout</a>
</body>
</html>
