<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $validUsername = "admin"; // Valid username
    $validPasswordHash = password_hash("1234", PASSWORD_DEFAULT); // Hashed password

    if ($username == $validUsername && password_verify($password, $validPasswordHash)) {
        header("Location: welcome.html");
        exit(); 
    } else {
        header("Location: login-form.php?error=1");
        exit();
    }
}
?>
