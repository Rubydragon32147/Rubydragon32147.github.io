<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NON-FICTION</title>
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
            <p style="color: white; font-size: 30px;">NON-FICTION </p>
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

                    <a href="Uodate.html" class="sunmenulink">
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
    <h2 style="text-align: center; font-size: 40px; border: 2px solid black ;">NON-FICTION BOOKS </h2>
    <div class="fantasy">
        <br>  
        <center>
           <table >
               <tr>
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529097306.jpg" width="200px" style="border-raidus:5%"></th>
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529094886.jpg" width="200px" ></th>
                  
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529091366.jpg" width="200px"style="border-raidus:5%" ></th>
                   
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035042210.jpg" width="200px" style="border-raidus:5%"></th>
                 
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529066678.jpg" width="200px" style="border-raidus:5%"></th>
                   
                   <!-- <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035027415.jpg" width="200px" style="border-raidus:5%"></th>
                   
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529040357.jpg" width="210px" height="310px"style="border-raidus:5%" ></th> -->
              </tr>
   
               <tr>
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[0].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1250867398">
                                </form></th>
                   
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[1].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9781668003183">
                                </form></th>
                
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[2].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1529091373">
                                </form></th>
                   
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[3].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="3426645661">
                                </form></th>
                 
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[4].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="0393882004">
                                </form></th>
                  
                   <!-- <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[5].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9781035027507">
                                </form></th>
         
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[0].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9781408855652">
                                </form></th> -->
              </tr>
           </table>
           <br><hr><br>
           <table >
               <tr>
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035033782.jpg" width="200px"style="border-raidus:5%"></th>
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781529092868.jpg" width="200px"style="border-raidus:5%" ></th>
                  
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035004966.jpg" width="200px" style="border-raidus:5%"></th>
                   
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035038732.jpg" width="200px" style="border-raidus:5%"></th>
                 
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035005512.jpg" width="200px" style="border-raidus:5%"></th>
                   
                   <!-- <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035025886.jpg" width="200px" style="border-raidus:5%"></th>
                   
                   <th style="padding: 5px;"><img src="https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-171/edition/9781035026739.jpg" width="210px" height="310px"style="border-raidus:5%" ></th> -->
              </tr>
   
               <tr>
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[5].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035006804">
                                </form></th>
                   
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[6].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="0385549032">
                                </form></th>
                
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[7].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035004992">
                                </form></th>
                   
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[8].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035038749">
                                </form></th>
                 
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[9].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1035005514">
                                </form></th>
                  
                   <!-- <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[0].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9781408855652">
                                </form></th>
         
                   <th style="padding: 5px;"><form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[0].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9781408855652">
                                </form></th> -->
              </tr>
           </table>
           <br><hr><br>
   
        </center>

    </div>


</body>

</html>