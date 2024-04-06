<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comedy</title>
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
            <p style="color: white; font-size: 30px;">COMEDY </p>
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
    <h2 style="text-align: center; font-size: 40px; border: 2px solid black ;">COMEDY BOOKS </h2>
    <div class="fantasy">
        <br>  
     <center>
        <table>
            <tr>
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035045662.jpg" width="200px"style="border-radius:5%"></th>

                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035045105.jpg" width="200px"style="border-radius:5%" ></th>
               
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529098839.jpg" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035031238.jpg" width="200px" style="border-radius:5%"></th>
              
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529095432.jpg" width="200px"style="border-radius:5%" ></th>
                
                <!-- <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529054088.jpg" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035036493.jpg" width="210px" height="310px"style="border-radius:5%"></th> -->
           </tr>

            <tr>
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[0].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1250290287">
                                </form></th>
                
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[1].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035045117">
                                </form></th>
             
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[2].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9781529098846">
                                </form></th>
                
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[3].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="385550367">
                                </form></th>
              
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[4].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1529095433">
                                </form></th>
               
               <!-- <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[5].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035006804">
                                </form></th>
      
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[5].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035006804">
                                </form></th> -->
           </tr>
        </table>
        <br><hr><br>
        <table >
            <tr>
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529098716.jpg" width="200px"style="border-radius:5%"></th>
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035036424.jpg" width="200px" style="border-radius:5%"></th>
               
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035038367.jpg" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035006830.jpg" width="200px"style="border-radius:5%" ></th>
              
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035021802.jpg" width="200px" style="border-radius:5%"></th>
                
                <!-- <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529098716.jpg" width="200px"style="border-radius:5%" ></th>
                
                <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035006830.jpg" width="210px" height="310px"style="border-radius:5%" ></th> -->
           </tr>

            <tr>
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[5].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1761560638">
                                </form></th>
                
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[6].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1555975984">
                                </form></th>
             
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[7].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9780063276642">
                                </form></th>
                
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[8].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="0316513075">
                                </form></th>
              
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[9].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1668032007">
                                </form></th>
               
               <!-- <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[5].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035006804">
                                </form></th>
      
               <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[5].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035006804">
                                </form></th> -->
           </tr>
        </table>
        <br><hr><br>

     </center>
    </div>
</body>

</html>