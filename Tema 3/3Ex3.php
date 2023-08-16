<! DOCTYPE html>
<html>
<title>
    Login & Register
</title>
<body>
<form method="post" action="3Ex3.php">
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Register</button>
    </div>

</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]=== "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
//    echo "$username"." "."$password";

    $file= fopen("users.txt", "a");
    fputcsv($file, [$username, $password]);
    fclose($file);
}
?>
