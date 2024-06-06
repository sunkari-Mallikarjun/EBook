//Register_submit.php
<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "test";
    
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }


    $email=$_POST['email'];
    $password=$_POST['password'];


    $sql = "INSERT INTO users1 (email, password) VALUES ('$email', '$password')";


    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    echo "Registration successful";
    mysqli_close($conn);
?>