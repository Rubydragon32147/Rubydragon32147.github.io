<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="other.css">
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
            <p style="color: white; font-size: 30px;">LASTED BOOKS </p>
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

    <h2 style="text-align: center; font-size: 40px; border: 2px solid black ;">LATEST BOOKS </h2>
    <div class="fantasy">
        <table>
            <tr >
                <th><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTYktnyxjSHqWbuYPiajteXgSZenTzYzN6mrTOrUPoZPqHi161q"
                        alt="book1" width="250px" style="border-radius: 10px;"></th>
                <th>
                    <h1>YELLOWFACE </h1>
                    <h2>R.F.KUANG</h2>
                    <p
                        style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        Kuang first began conceptualizing Yellowface in 2021, amidst conversations regarding diversity
                        and representation in the publishing industry. She wrote the first draft over the course of a
                        few months, taking inspiration from her own experiences as an Asian American author, such as
                        being told her appeal is largely or entirely due to her being a "token" author.

                        Upon reading parts of the first draft, Kuang's literary agent was at first hesitant about the
                        project and attempted to dissuade Kuang from pursuing it further due to its content being seen
                        as an attack on the publishing industry. At Kuang's insistence, they continued the project; it
                        was ultimately published by HarperCollins.</p>
                </th>
                <th><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcThQLO8iRxf-PSxMaYkWtC7tpTKa4UcRnyxCKidhEh2Uxg7zmkH"
                        alt="book2" width="250px" style="border-radius: 10px;"></th>
                <th>
                    <h1>THE ONLY ONE LEFT </h1>
                    <h2>RILEY SAGAR </h2>
                    <p
                        style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        Kittredge "Kit" McDeere is a 30-something caregiver accused of fatally overdosing her mother,
                        who was dying of painful stomach cancer. The only job she can get is acting as a home health
                        aide to Lenora Hope, an old woman who, like Kit, was once accused of murdering her family. The
                        job is open because the previous nurse, Mary Milton.

                        Kit takes the job and moves to Hope's End, Lenora's decrepit mansion. She meets the servants:
                        nanny Mrs. Baker, Archie the cook, Jessie the housemaid, and Carter Mayhew, the groundskeeper,
                        who believes himself to be the illegitimate grandson of Lenora Hope and thus heir to the Hope
                        family fortune</p>
                </th>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <th><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRijbfdBlHRSyMrUGGTk5oCRs6ZFeplARo08mvR4VuP751vYnSK"
                        alt="book3" width="250px" style="border-radius: 10px;"></th>
                <th>
                    <h1>A HOUSE OF GOOD BONES </h1>
                    <h2>URSULA VERNON</h2>
                    <p
                        style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        Archaeoentomologist Samantha Montgomery returns to her family home in rural North Carolina. The
                        house once belonged to her deceased grandmother, Gran Mae, with whom the family had a fraught
                        relationship. Gran Mae was verbally and emotionally abusive toward her daughter and
                        grandchildren, often threatening them that the “underground children” would eat them if they
                        misbehaved. Sam notices that her mother Edith has changed. Edith seems anxious, and the decor of
                        Sam's childhood home has been changed significantly. Whenever Sam comments on a negative memory
                        about Gran Mae, Edith immediately contradicts her, as if someone is listening.

                        There is a mysterious lack of insects in Gran Mae's prized rose garden, but ladybugs repeatedly
                        swarm the house. Sam has several dreams of a woman combing her hair and dropping rose petals
                        onto her. </p>
                </th>

                <th><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRMvzFC2z5LLT_xZoT8MT8XTKrJiEKBSRcDVfXq7qsI-lgOEoUJ"
                        alt="book4" width="250px" style="border-radius: 10px;"></th>
                <th>
                    <h1>FAMILY LORE </h1>
                    <h2>ELIZABETH ACEVEDO</h2>
                    <p
                        style="font-size: 15px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                        Despite some mixed reviews, Family Lore was generally well received by critics.Star Tribune's
                        Kevin Canfield called the novel "vibrant", writing that "Acevedo wields her own sort of magic in
                        her first novel for adults, deftly blending comedy and sorrow".[1] Also highlighting the novel's
                        fantastical elements, Publishers Weekly noted that "the various magical elements aren’t very
                        well developed".

                        On behalf of The Washington Post, Patricia Engel called the novel "enchanting" and highlighted
                        how Acevedo "strikes a rousing prose blend of bluntness, lyricism, slang, pop culture
                        references, and the interlingual expansiveness fluidly employed by first- and second-generation
                        immigrants".</p>
                </th>

            </tr>
        </table>

</body>

</html>
