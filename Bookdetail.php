<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Div DETAIL</title>
        <!-- <link rel="stylesheet" href="Bookdetail.css"> -->
        <!-- <link rel="stylesheet" href="detailtry.css"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php 
    session_start();
    ?>
    <style>
        *{
        margin:0;
        padding: 0;
        box-sizing:border;
    }

    body{
        background-color: rgb(189, 207, 220);  
    }
    ::-webkit-scrollbar{
        display: none;
    }


    .hero{
        width:100%;
        /* min-height: 100vh; */
        /* background-color: #eceaff; */
        color: #525252;
    }
    nav{
        background-color: black;
        width: 100%;
        /* padding: 10px 10%; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        font-size: 20px;
    }
    .logo{
        width: 140px;
        height: 115px;
    }
    .user-pic{
        width: 40px;
        border-radius: 50%;
        cursor: pointer;
        /* margin-left: 40px; */
        padding:30px

    }
    nav ul{
        width: 100%;
        text-align: right;
    }

    nav ul li{
        display: inline-block;
        list-style: none;
        margin: 10px 10px;
    }

    nav ul li a{
        color: white;
        text-decoration: none;
    }
    .sub-menu-wrap{
        position: absolute;
        top: 100%;
        left : 70%;
        width: 420px;
        max-height: 2px;
        overflow: hidden;
        transition: max-height 0.5s ease-in-out;
        z-index: 1;
    }

    .sub-menu-wrap.open-menu{
        max-height: 400px;
    }


    .sub-menu{
        background-color: white;
        padding: 20px;
        margin: 20px;
        border-radius: 10px;
    }
    .userinfo{
        display: flex;
        align-items: center;
    }
    .userinfo h2{
        font-weight: 500;
        font-size: 25px;
    }

    .userinfo img{
        width: 100px;
        height: 90px;
        border-radius: 50%;
        margin-right: 15px;
    }

    .sub-menu hr{
        border: 0;
        height: 1px;
        width: 100%;
        background: white;
        margin: 15px 0 10px;
        
    }
    .sunmenulink{
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #525252;
        margin: 12px 0;
    }
    .sunmenulink p{
        width: 100%;
    }
    .sunmenulink span{
        font-size: 22px;
        transition: transform 0.5s;

    }
    .sunmenulink:hover span{
        transform: translateX(5px);
    }
    .sunmenulink p:hover p{
        font-weight: 600;
    }

    /* GERNA DROPDOWN MENU  FROM THE OLD CODE */


    li a, .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        /* position: relative; */
        /* top: 50px; */
    }
    
    li a:hover, .dropdown:hover .dropbtn {
        background-color: white;
        color: black;
    }
    
    li.dropdown {
        
        display: inline-block;
        /* position: relative;
        top: 17px; */
        /* z-index: 1; */
        
    }
    
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    
    .dropdown-content a:hover {background-color: #f1f1f1;}
    
    .dropdown:hover .dropdown-content {
        display: block; }
    
    .book1 {
        height: 500px;
        width:100% ;
        border: 2px solid black;
        display: flex;
        justify-content: center;
        align-items: center ;
        font-family: 'Times New Roman', Times, serif;
        z-index: -1;

    }


    .img {
        height: 450px;
        width :300px;
        border: 2px solid red;

    }


    #info {
        height: 450px;
        width: 600px;
        border: 2px solid red;
    }


    .head {
        font-size:35px;
        background-color: rgb(189, 207, 220);
        text-align: center;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        justify-content: center;
    }
    #social {  /* Corrected typo: "social" instead of "socail" */
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    }

    .Aname {
    font-size: 23px;
    display: flex;
    align-items: center;
    }

    #social img {
    width: 55px;
    height: 50px;
    margin-right: 10px;
    }

    .star {
    font-size: 35px;
    margin-bottom: 10px;  
    }

    .des {
    font-size: 25px;
    }


    /* .checked {
        color: orange;
    }

    #desc  h4 {
        font-size: 25px;
    }

    #desc  p {
        font-size: 25px;
    }


    .myreview2 h2{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
        font-size: 30px;
    } */

    textarea {
        width: 650px;
        height: 120px; 
        background-color: gray;
        border-radius: 5px;
    }

    
    </style>
    </head>
    <?php

    $db_host = "localhost";
    $db_name = "tech_project";
    $db_user = "Aditya";
    $db_password = "Qwertyasdf80";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }



    if (isset($_POST['Clicked'])) {
    $_SESSION['ISBN'] = $_POST['Clicked'];
    }

    $ISBN = $_SESSION['ISBN'];
    ?>
    <body>
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
                            <img src="IMG.png">
                            
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

            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }
        </script>

    <div class="book1">

    <div class="img" id="img ">
    <?php 
            
            $sql = "SELECT Image FROM book WHERE ISBN = $ISBN";
            $result = $conn->query($sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result); 
                $image = $row['Image'];

                echo "<img src=$image length=200px Width=150px class='img'> ";
            }
        ?>
        <div id="Read">
        <form action="mybook.php" method="post">
        <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[0].submit(); return false;">Read</a>
        <input type="hidden" name="Clicked" value="<?php $_SESSION['username'] ?>">
        </form>
        </div>
    </div>
    <div class="info" id="info">
        <div class="head" id="head">
        <?php 
            
            $sql = "SELECT Title FROM book WHERE ISBN = $ISBN";
            $result = $conn->query($sql);
            if ($result) {
               
                if (mysqli_num_rows($result) === 1) {
                  $row = mysqli_fetch_assoc($result); 
                  $title = $row['Title']; 
              
                  echo "<p class='head'>$title</p>";
              
                } else {
                  echo "No book found with ISBN $ISBN";
                }
            
              } else {
                echo "Error retrieving title: " . mysqli_error($conn);
              }
            

              ?>
        </div>
        <br>
        <div class="Aname" id="Aname" >
           <?php 
            
            $sql = "SELECT Author_ID FROM book WHERE ISBN = $ISBN";
            $result = $conn->query($sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result); 
                $ID = $row['Author_ID'];
            }
            $sql2 = "SELECT Name from author WHERE Author_ID = $ID";
            $result2 = $conn->query($sql2);

            if(mysqli_num_rows($result2) === 1){
                $row = mysqli_fetch_assoc($result2); 
                $Aname = $row['Name'];

                echo $Aname;
            }

            ?>
                       
            <div class="socail" id="socail">
            <?php 
                $sql = "SELECT Author_ID FROM book WHERE ISBN = $ISBN";
                $result = $conn->query($sql);
    
                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result); 
                    $ID = $row['Author_ID'];
                }
                $sql2 = "SELECT Social_Media from author WHERE Author_ID = $ID";
                $result2 = $conn->query($sql2);
    
                if(mysqli_num_rows($result2) === 1){
                    $row = mysqli_fetch_assoc($result2); 
                    $Social = $row['Social_Media'];
    
                    echo "<a href=$Social>Social Media</a>";
                }
                ?>            
                       
             </div>
        </div>

        <div class="star" id="star">
        <?php 
            $sql = "SELECT Rating FROM book WHERE ISBN = $ISBN";
            $result = $conn->query($sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result); 
                $rating = $row['Rating'];

                echo $rating;
            }
            ?>
        </div>

        <br>

        <!-- <h4 style="font-size: 25px;">Tags: Fantasy, YoungAdult Mythology, Fiction, Adventure, Greek Mythology</h4> -->
        <?php 
            $sql = "SELECT Description FROM book WHERE ISBN = $ISBN";
            $result = $conn->query($sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result); 
                $description = $row['Description'];

                echo "<div class='des' id='desc'>$description</div>" ;
            }
            ?>
     </div>
    </div>
    <center>
        <div class="myreview" id="myreview">
            <div id="Enter Review" class="">
                <form action="Review_Process.php" method="POST">
                Enter your review here: <br><br>
                <input type="text" id="review" name="review" placeholder="Reivew....">  <br><br>
                <input type="submit" name="subrev" value="Submit Review"> 
                </form>
            </div>
            <div id="Display_Review">
                <br><br><br><br><br>
                <?php 
                $sql = "SELECT r.Description, u.Username FROM review r,user u WHERE (r.ISBN = $ISBN) AND (r.User_ID = u.User_ID)";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                        $description = $row["Description"];
                        $username = $row["Username"];
                                  
                       
                        echo "<div style='border: 1px solid #ccc; border-radius: 5px; padding: 15px; margin-bottom: 20px; display: flex;'>";
                        echo "<div style='margin-right: 15px;'><img src='profile_photo.jpg' alt='Profile Photo' style='width: 50px; height: 50px; border-radius: 50%;'></div>";
                        echo "<div>";
                        echo "<h3 style='font-size: 18px; margin-bottom: 5px;'>Review By $username</h3>";
                        echo "<p style='font-size: 16px; line-height: 1.6; color: #333;'>$description</p>";
                        echo "</div>";  
                        echo "</div>";
                    }
                } else {
                    echo "<p style='text-align: center; font-size: 18px;'>No reviews found for this Book.</p>";
                }
                
                  

?>
            </div>
        </div>
    </center>
    <br><br><br>
    