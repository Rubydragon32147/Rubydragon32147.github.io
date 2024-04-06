<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//error reporting

$db_host = "localhost";
$db_name = "tech_project";
$db_user = "Aditya";
$db_password = "Qwertyasdf80";


$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

$eusername = $conn->real_escape_string($_POST['eusername']);
$epassword = $conn->real_escape_string($_POST['epassword']);
$nusername = $conn->real_escape_string($_POST['nusername']);
$npassword = $conn->real_escape_string($_POST['npassword']);
    
$sql = "SELECT User_ID FROM user WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $eusername, $epassword);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $userId = $row['User_ID'];

    $sql = "UPDATE user 
            SET username = ?, password = ? 
            WHERE User_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nusername, $npassword, $userId);
    $stmt->execute();
  
} else {
    echo "<script>alert('Invalid Username, Password, or Email. Please try again.');</script>";
}

header('Location: login.html');


$conn->close();


?>

