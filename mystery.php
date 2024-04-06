<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mystery</title>
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
    <h2 style="text-align: center; font-size: 40px; border: 2px solid black ;">MYSTERY BOOKS </h2>
    <div class="fantasy">
        <br>  
     <center>
        <table >
            <tr>
                <th style="padding: 5px;"><img src="mystery/book1.png" width="200px"style="border-radius:5%"></th>
                <th style="padding: 5px;"><img src="mystery/book2.png" width="200px"style="border-radius:5%" ></th>
               
                <th style="padding: 5px;"><img src="mystery/book3.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="mystery/book4.png" width="200px" style="border-radius:5%"></th>
              
                <th style="padding: 5px;"><img src="mystery/book5.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="mystery/book6.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="mystery/book7.png" width="210px" height="310px"style="border-radius:5%"></th>
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
                <th style="padding: 5px;"><img src="mystery/book11.png" width="200px"style="border-radius:5%"></th>
                <th style="padding: 5px;"><img src="mystery/book12.png" width="200px" style="border-radius:5%"></th>
               
                <th style="padding: 5px;"><img src="mystery/book13.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="mystery/book14.png" width="200px"style="border-radius:5%" ></th>
              
                <th style="padding: 5px;"><img src="mystery/book15.png" width="200px" style="border-radius:5%"></th>
                
                <th style="padding: 5px;"><img src="mystery/book16.png" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="mystery/book17.png" width="210px" height="310px"style="border-radius:5%" ></th>
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