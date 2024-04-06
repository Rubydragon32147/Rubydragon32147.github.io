<?php 
    $servername = "localhost";
    $username = "Aditya";
    $password = "Qwertyasdf80";
    $db_name = "tech_project";

    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn ->connect_error){
        die("Connection failed".$conn->connect_error);
    }
?>