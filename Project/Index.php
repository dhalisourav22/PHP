<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In - Clever Coder</title>
    <!-- if we change this file css that will be occar in IndexmeansSingInFromServices.php file as well. Both file use this comon Style.css file -->
    <link rel="stylesheet" href="Css/LoginPageStyle.css">
        <!-- preloader css link  -->
        <link rel="stylesheet" href="Css/preloader.css">
    <link rel="icon" href="Images/bnr-1.png">
</head>
<body>

    <!-- preloader  -->
    <div id="preloader"></div>

    <div class="main" >
        <div class="navbar-container">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">Coder</h2>
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="Opening.php">HOME</a></li>
                        <li><a href="Opening.php #services-container">SERVICES</a></li>
                        <li><a href="Opening.php #client-section">COURSES</a></li>
                        <li><a href="Opening.php #contact">CONTACT</a></li>
                        <li><a href="OpeningAboutNotLogin.php">ABOUT</a></li>
                    </ul>
                </div>

                <div class="search">
                    <form action="searchForOpening.php" method = "post">
                        <input class="srch" type="search" name="searchResult" placeholder="Type To text">
                        <button  type="submit" class="btn">Search</button>
                    </form>
                </div>

            </div> 
        </div>
        <div class="content">

            <div class="text">
                <h1>Quickly  <br><span>Join Us</span> </h1>
                <p class="par">Hello student. Welcome to Clever Coder family. We are the first educational website to provide free tutorial of coding. We also take online coding class for free. We provide some game like Quiz game, Snake game and Tic Tac Toe game. You just only need to join our family to play those games. We all know that a game can able to increase the IQ level of human means student. Tic-tac-toe helps children develop their spatial skills like logical thinking. In Quiz game we provide you 5 question and you have to answer from those question. After giving the exam, we the clever coder authority showing you that, what mark you get from this test.</p>

            </div>
            
            <div class="form">
                <h2>Log In Here</h2>

                <form action ="Validation.php" method="post"> 
                    <input type="text" name="userName" placeholder="Enter Username Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button type="submit" class="btnn">Log In</button>
                </form>
                
                <p class="link">Don't have an account<br>
                <a href="IndexSingUp.php">Sign Up </a> here</a></p>
            </div>            
            

        </div>
    </div>
    <footer>
        <div class="center foot">
            Copyright &copy;<a href="https://www.youtube.com/c/CleverCoder" target="blank" style="text-decoration: none">www.clevercoder.com.</a> All rights reserved!
        </div>
    </footer>

        <!-- preloader  -->
        <script src="JS/preloader.js"></script>  
</body>
</html>