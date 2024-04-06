<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- <link rel="stylesheet" href="home2.css"> -->
    <?php 
    session_start();
     if(isset($_SESSION["username"])){
        $uname = $_SESSION["username"];
     }
    ?>
</head>
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
    height: 135px;
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
    font-family:Georgia, 'Times New Roman', Times, serif
}

nav ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 10px;
}

nav ul li a{
    color: white;
    text-decoration: none;
    font-size: 20px;
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
    font-size: 22px;
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
    display: block;
   
  }
  .book1{
    height: 500px;
    width:100% ;
     /* border: 2px solid black; */
    display: flex;
    justify-content: center;
    align-items: center ;
    font-family: 'Times New Roman', Times, serif;
    z-index: -1;
}
.img
{
    height: 450px;
    width:400px;
    /*border: 2px solid red; */
}

.info{
    height: 450px;
    width:600px;
    /* border: 2px solid red; */
}

.im:hover{
    background-color: rgb(145, 153, 154) 

}

img{
    width: 100%;
}

/* BOOK FLIPPING  */
.book {
    width: 200px;
    height: 350px;
    perspective: 1000px;
    border-radius: 5%;
  }
  
  .page {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
    transition: transform 0.5s;
    border-radius: 5%;
  }
  
  .front-page {
    background-color: #F2F2F2;
    z-index: 2;
  }
  
  .back-page {
    background-color: #E0E0E0;
    transform: rotateY(180deg);
  }
  
  .book:hover .front-page {
    transform: rotateY(180deg);
  }
  
  .book:hover .back-page {
    transform: rotateY(0deg);
  }

  #preloader{
    background: black url(loader/loader2.gif) no-repeat center center;
    height: 100vh;
    width: 100% ;
    position: fixed;
    z-index: 100 ;
    
}

/* HOME PAGE  */
.image-container {
    position: relative;
    margin: 0%;
    
}


.overlay {
    position: absolute;
    top: 10%; 
    left: 3%; 
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    padding-left: 50px;
    opacity: 0.9;
    border-radius: 5px;
    margin: 0%;
    width: 430px;
    height: 350px;
    color: black 
}
.overlay h1 {
    margin: 0;
}



</style>


<body>

    <div id="preloader">
        <br><br><br><br><br><br><br><br><br>
        <h1 style="color: white; text-align: center; font-size: 50px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"> THE BOOK READERS CLUB</h1>
    </div>
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>

    
    <div class="hero">
        <nav>
            <img src="logo2.png" class="logo">
            <p style="color: white; font-size: 33px;">Welcome, <?php echo $uname; ?> </p>
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
                        <img src="mulmul.png">
                        <!-- your name -->
                        <h2 style="font-size:45px"><?php echo $uname; ?></h2>  
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
    <div class="image-container">
        <img src="mic/micpic2.png" class="mainpict" width="100%" height="500px">
        <div class="overlay">
            <h1 id="why"
                style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 50px; ">
                &nbsp;&nbsp;&nbsp;"THERE IS ONLY <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ONE THING
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THAT COULD <br>&nbsp;REPLACE A BOOK: <br>&nbsp; THE NEXT BOOK." </h1>

            <p style="text-align: center; font-size: 30px;">~Piotr kowalazyk</p>
        </div>
    </div>
    <br><br>   
    <h2
        style="text-align: center; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 35px;">
        THE BEST SELLING BOOK SERIES OF ALL TIME</h2>
    <br>

    <center><img src="loader/harry-removebg-preview.png" alt="bbhrhbr" style="width: 400px;"></center>

    <br>
    <!-- book flip code  -->
    <center>
        <table>
            <tr>
                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="harrypotter/book1.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Harry Potter has never even heard of Hogwarts when the letters start dropping on the
                                doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with
                                a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on
                                Harry's eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid
                                bursts in with some astonishing news: Harry Potter is a wizard.<br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[0].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9781408855652">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>

                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%;height: 350px;"
                                src="harrypotter/book2.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Harry Potter's summer has included the worst birthday ever, doomy warnings from a
                                house-elf called Dobby, and rescue from the Dursleys by his friend Ron Weasley in a
                                magical flying car! Back at Hogwarts School of Witchcraft and Wizardry for his second
                                year, Harry hears strange whispers echo through empty corridors - and then the attacks
                                start. Students are found as though turned to stone... <br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[1].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="0439064872">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>

                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="harrypotter/book3.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                When the Knight Bus crashes through the darkness and screeches to a halt in front of
                                him, it's the start of another far from ordinary year at Hogwarts for Harry Potter.
                                Sirius Black, escaped mass-murderer and follower of Lord Voldemort, is on the run - and
                                they say he is coming after Harry. In his first ever Divination class, Professor
                                Trelawney sees an omen of death in Harry's tea leaves <br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[2].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="545582938">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>

                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="harrypotter/book4.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                The Triwizard Tournament is to be held at Hogwarts. Only wizards who are over seventeen
                                are allowed to enter - but that doesn't stop Harry dreaming that he will win the
                                competition. Then at Hallowe'en, when the Goblet of Fire makes its selection, Harry is
                                amazed to find his name is one of those that the magical cup picks out. <br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[3].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1338878956">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>
                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="harrypotter/book5.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Dark times have come to Hogwarts. After the Dementors' attack on his cousin Dudley,
                                Harry Potter knows that Voldemort will stop at nothing to find him. There are many who
                                deny the Dark Lord's return, but Harry is not alone: a secret order gathers at Grimmauld
                                Place to fight against the Dark forces. <br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[4].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1338299182">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>


                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="harrypotter/book6.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                When Dumbledore arrives at Privet Drive one summer night to collect Harry Potter, his
                                wand hand is blackened and shrivelled, but he does not reveal why. Secrets and suspicion
                                are spreading through the wizarding world, and Hogwarts itself is not safe. Harry is
                                convinced that Malfoy bears the Dark Mark: there is a Death Eater amongst them.
                                <br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[5].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1338878972">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>
            </tr>
        </table>

    </center>
    <br> 

    <!-- GOOSEBUMPS  -->

    <center><img src="goosebumps/logo.png" alt="bbhrhbr" style="width: 400px;"></center>

    <br>
    <!-- book flip code  -->
    <center>
        <table>
            <tr>
                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="goosebumps/book1.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: left">
                                Goosebumps is a series of horror novels written by American author R. L. Stine.
                                    The protagonists in these stories are teens or pre-teens who find themselves in
                                    frightening circumstances, often involving the supernatural, the paranormal, or 
                                    the occult. Between 1992 and 1997, 62 books were published under the Goosebumps
                                     umbrella title. R. L. Stine<br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[6].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9780590509954">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>

                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%;height: 350px;"
                                src="goosebumps/book22.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                A spooky deal for kids going to summer camp--a special 
                                Goosebumps trilogy all about camp! Includes Welcome to Camp Nightmare,
                                 The Horror at Camp Jellyjam and Ghost Camp. <br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[7].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9780590341196">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>


                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="goosebumps/book33.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                They're baa-ack! Make way for the bestselling children's series of all time! With a fresh new look,
                                 GOOSEBUMPS is set to scare a whole new generation of kids. So reader beware--you're in for a scare! 
                                 After last year's scary adventure, Gabe's a little nervous about being back in Egypt. Back near the 
                                 ancient pyramids.  <br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[8].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9781407157467">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>



                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="goosebumps/book4.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Amanda and Josh think the old house they have just moved into is weird, spooky,
                                 possibly haunted but their parents do not believe them. You'll get used to it, they say.
                                  Go out and make some new friends. So Amanda and Josh do but these new friends are not exactly 
                                  what their parents had in their mind because they wanted to be friends, forever. <br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[9].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="0590453653">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>


                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="goosebumps/book55.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                On Max's birthday, he finds a kind of magic mirror in the attic. It can make make him become invisible.
                                 So Max and his friends start playing "now you see me, now you don't." Until Max realizes that he's losing control.
                                  Staying invisible a little too long. Having a harder and harder time coming back. Getting invisible is turning into a
                                   very dangerous game. The next time Max gets invisible, will it be...forever? <br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[10].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="1407157310">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>

                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="goosebumps/book66.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                They're baa-ck! Just when you thought it was safethe top-selling titles in the series that revolutionized horro are back with a fresh new look.
                                <br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[11].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="0590196456">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>
            </tr>
        </table>

    </center>
    <br> 
   

<!-- LORD OF THE RINGS   -->


    <center><img src="lord/removed.png" alt="bbhrhbr" style="width: 600px; height: 150px;"></center>
    <!-- book flip code  -->
    <center>
        <table>
            <tr>
                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="lord/book1.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Set in Middle-earth, the story tells of the Dark Lord Sauron, who seeks the One Ring,
                                 which contains part of his might, to return to power. The Ring has found its way to 
                                 the young hobbit Frodo Baggins. The fate of Middle-earth hangs in the balance as Frodo 
                                 and eight companions begin their perilous journey 
                                 to Mount Doom in the land of Mordor, the only place where the Ring can be destroyed.<br><br>
                                 <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[12].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="0547928211">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>

 

                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%;height: 350px;"
                                src="lord/book2.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                Awakening from a dream of Gandalf fighting the Balrog in Moria, Frodo Baggins finds himself, along with Samwise Gamgee, 
                                lost in the Emyn Muil near Mordor. They discover that they are being tracked by Gollum, a former bearer of the One Ring. Capturing Gollum, 
                                Frodo takes pity and allows him to guide them, reminding Sam that they will need Gollum's help to infiltrate Mordor. <br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[13].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="0345339711">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>

    

                <th style="padding: 10px;">
                    <div class="book">
                        <div class="page front-page"><img style="border-radius: 5%; height: 350px;"
                                src="lord/book3.png">
                        </div>
                        <div class="page back-page">
                            <p
                                style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                The Return of the King" presents the final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Hobbits Frodo and Sam reach Mordor in their quest to destroy the `one ring', while Aragorn leads the forces of good against Sauron's evil army at the stone city of Minas Tirith.<br><br><br>
                                <form action="Bookdetail.php" method="post">
                                <a style="font-size: 20px; text-decoration: none;" onclick="document.forms[14].submit(); return false;">VIEW BOOK</a>
                                <input type="hidden" name="Clicked" value="9780007488346">
                                </form>
                            </p>
                        </div>
                    </div>
                </th>
    </table>

               

     </center>         
    <br><br>
    

    <!-- THIS CODE SHOULD BE AT THE LAST  -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/49eAj0gXSEk?si=CuS5kdsKUxV3wEHu"
        title="YouTube video player" frameborder="0" style="display: none;"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>


</body>

</html>