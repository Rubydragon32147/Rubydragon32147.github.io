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

$username = $_SESSION["username"];
$ISBN = $_SESSION['ISBN'];
$Review = $_POST['review'];


$sql = "SELECT * FROM user WHERE  username='$username' ";
    $result1 = $conn->query($sql);
    if($result1){
        $row = mysqli_fetch_assoc($result1);
        $User_ID = $row['User_ID'];
    }

    $sql2 = "SELECT * FROM review where User_ID = $User_ID AND ISBN = $ISBN";
    $result = $conn->query($sql2);

  

        if ($result->num_rows > 0) {
        die("You already have a review");
        } 
        else {
  
        $sql3 = "INSERT INTO review(User_ID,ISBN,Description) VALUES ($User_ID, $ISBN, '$Review')";
        if($conn->query($sql3)){
            echo "Review successfully entered";
        }
        else{
            echo "Error";
        }

    }
?>