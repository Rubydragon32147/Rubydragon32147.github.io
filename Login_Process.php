<?php
session_start();

$db_host = "localhost";
$db_name = "tech_project";
$db_user = "Aditya";
$db_password = "Qwertyasdf80";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
}
   
    $sql = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password' AND Email = '$email'";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $username;
        header('Location: home2.php');
    }
    else{
        echo "<script>alert('Invalid Username, Password, or Email. Please try again.');</script>";
    }

    // if (mysqli_num_rows($result) == 1) {
       
    //      header('Location: home2.html'); 
    // } 
    // else {
    //      echo "<script>alert('Invalid Username, Password, or Email. Please try again.');</script>";
    // }
    

    mysqli_close($conn);
// }
?>
