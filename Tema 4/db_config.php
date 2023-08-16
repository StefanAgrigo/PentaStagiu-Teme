<?php

$host = 'localhost';
$db = 'users';
$user = 'admin';
$password = 'admin';

try {
    $pdo = new PDO ("mysql:host=$host; dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO users (username, password) VALUES ('Xin', 'Xin')";
    $pdo->exec($sql);
    echo" new ";
} catch (PDOException $e) {
    echo "connection failed" . $e->getMessage();
}

$pdo= null;
?>
