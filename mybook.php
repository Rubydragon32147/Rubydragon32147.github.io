<!DOCTYPE html>
<html lang="en">
<!--jimit anil-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my books</title>
    <link rel="stylesheet" href="other.css">
</head>


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

if(isset($_SESSION['ISBN'])){
    $ISBN = $_SESSION['ISBN'];
}
else{
    echo "Error";
}

$username = $_SESSION['username'];
$sql = "SELECT User_ID from user where Username='$username'";
$result = $conn->query($sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    $User_ID = $row['User_ID'];
}

$sql1 = "INSERT INTO `read` (`User_ID`, `ISBN`) VALUES ($User_ID,$ISBN)";
$conn->query($sql1);

?>

<body>
    <!-- <center><table border = 0 id="Logo">
        <tr>
            <td>
                <center><img id="logo" src="BRC_Logo.png" width="200px" height="200px" alt="Logo"></center>
            </td>
            <td>
                <b>Welcome to Book Readers Club</b>
            </td>
        </tr>
    </table></center> -->

    <div class="hero">
        <nav>
            <a href="home2.php"><img src="logo2.png" class="logo"></a>
            <p style="color: white; font-size: 30px;">MY BOOKS </p>
            <!-- width="140px" height="115px" -->
            <ul>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">GENRE</a>
                    <div class="dropdown-content">
                        <a href="GENRE.php">FANTASY </a>
                        <a href="fiction.php">FICTION</a>
                        <a href="nonfiction.php">NON-FICTION</a>
                        <a href="comedy.php">COMEDY</a>
                        <a href="rommance.php">ROMMANCE</a>
                        <div class="dropdown-content">
                        <a href="action.php">ACTION </a>
                        <a href="classic.php">CLASSICS</a>
                        <a href="graphic.php">GRAPHIC</a>
                        <a href="mystery.php">MYSTERY</a>
                        <a href="horror.php">HORROR</a>

                    </div>
                </li>
                <li><a href="NEW.php">LATEST</a></li>
                <li><a href="BESTSELLING.php">RANDOM BOOKS</a></li>
                <li><a href="mybook.php">MY BOOKS</a></li>
            </ul>
            <img src="icon-removebg-preview.png" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="userinfo">
                        <img src="IMG.png" >
                        <h2>YOUR NAME</h2>
                    </div>
                    <hr>

                    <a href="Update.html" class="sunmenulink">
                        <p>Update Account details</p>
                        <span>></span>
                    </a>

                    <a href="Delete_Account.html" class="sunmenulink">
                        <p>Delete Account</p>
                        <span>></span>
                    </a>

                    <a href="login.html" class="sunmenulink">
                        <p>Logout</p>
                        <span>></span>
                    </a>

                </div>
            </div>

        </nav>

    </div>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>

<?php 
echo "Books Read by $username";
$sql2 = "SELECT DISTINCT ISBN FROM `read` WHERE User_ID=$User_ID";

$result2 = $conn->query($sql2);



if($result2){
    while($row = mysqli_fetch_assoc($result2)){
        $isbn2 = $row['ISBN'];

        $sql3 = "SELECT image,Title,Rating FROM book WHERE ISBN=$isbn2";
        $result3 = mysqli_query($conn, $sql3);

        if ($result3) {
            echo "<table>"; 
      
            while ($row3 = mysqli_fetch_assoc($result3)) {
              echo "<tr>";
              echo "<td><img src='" . $row3['image'] . "' alt='" . $row3['Title'] . "' Height=150px width=100px></td>"; 
              echo "<td>" . $row3['Title'] . "</td>";
              echo "<td>" . $row3['Rating'] . "</td>";
              echo "</tr>";
            }
          
            echo "</table>";
          } 
          else {
            echo "Error fetching data from book table: " . mysqli_error($conn);
          }
      }
    }
    


?>

</body>

</html>