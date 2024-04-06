<?php
$db_host = "localhost";
$db_name = "tech_project";
$db_user = "Aditya";
$db_password = "Qwertyasdf80";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['pass']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm']);


if ($password !== $confirm_password) {
    die("Passwords do not match!");
}   


$sql = "SELECT * FROM user WHERE username='$username' OR email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    die("Username or email already exists!");
}

$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header('Location: login.html'); 
} else {
    die("Error registering user: " . mysqli_error($conn));
}

mysqli_close($conn);
?>  