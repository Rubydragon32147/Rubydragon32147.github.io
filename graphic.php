<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRAPHIC</title>
    <link rel="stylesheet" href="gerna.css">
    <?php 
    include('connection.php');
    session_start();
     if(isset($_SESSION["username"])){
        $uname = $_SESSION["username"];
     }
    ?>
</head>

<body>
    <div class="hero">
        <nav>
            <a href="home2.php"><img src="logo2.png" class="logo"></a>
            <p style="color: white; font-size: 30px;">GRAPHIC </p>
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
                        <h2><?php echo $uname; ?></h2>
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
    <br>
    <h2 style="text-align: center; font-size: 40px; border: 2px solid black ;">GRAPHIC BOOKS </h2>
    <div class="fantasy">
        <br>  
     <center>
        <table >
            <tr>
                <th style="padding: 5px;"><img src="graphic/book1.png" width="200px"style="border-radius:5%"></th>
                <th style="padding: 5px;"><img src="graphic/book2.png" width="200px"style="border-radius:5%" ></th>
               
                <th style="padding: 5px;"><img src="graphic/book3.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="graphic/book4.png" width="200px" style="border-radius:5%"></th>
              
                <th style="padding: 5px;"><img src="graphic/book5.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="graphic/book6.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="graphic/book7.png" width="210px" height="310px"style="border-radius:5%"></th>
           </tr>

            <tr>
                <th style="padding: 5px;">button</th>
                
                <th style="padding: 5px;"> button</th>
             
                <th style="padding: 5px;">button</th>
                
                <th style="padding: 5px;">button</th>
              
                <th style="padding: 5px;">button</th>
               
                <th style="padding: 5px;">button</th>
      
                <th style="padding: 5px;">button</th>
           </tr>
        </table>
        <br><hr><br>
        <table >
            <tr>
                <th style="padding: 5px;"><img src="graphic/book11.png" width="200px"style="border-radius:5%"></th>
                <th style="padding: 5px;"><img src="graphic/book12.png" width="200px" style="border-radius:5%"></th>
               
                <th style="padding: 5px;"><img src="graphic/book13.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="graphic/book14.png" width="200px"style="border-radius:5%" ></th>
              
                <th style="padding: 5px;"><img src="graphic/book15.png" width="200px" style="border-radius:5%"></th>
                
                <th style="padding: 5px;"><img src="graphic/book16.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="graphic/book17.png" width="210px" height="310px"style="border-radius:5%" ></th>
           </tr>

            <tr>
                <th style="padding: 5px;">button</th>
                
                <th style="padding: 5px;"> button</th>
             
                <th style="padding: 5px;">button</th>
                
                <th style="padding: 5px;">button</th>
              
                <th style="padding: 5px;">button</th>
               
                <th style="padding: 5px;">button</th>
      
                <th style="padding: 5px;">button</th>
           </tr>
        </table>
        <br><hr><br>
        

     </center>
    </div>
</body>

</html>