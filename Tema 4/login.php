<?php

global $pdo;
require 'db_config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && $user['password'] === $password){
        $_SESSION['user_id'] = $user['id'];
        header("Location: profile.php");
        exit;
    }
    else{
        $loginError = "Invalid credentials";
    }
}
?>

<!DOCTYPE>      >
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
<h2>Login</h2>
<form method="post" action="">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" value="Login">
</form>
<?php if (isset($loginError)): ?>
<p><?php echo $loginError; ?> </p>
<?php endif; ?>
</body>
</html>
