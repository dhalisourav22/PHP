<?php
  session_start();

  $server = "localhost";
  $username = "root";
  $password = "";
  $con = mysqli_connect($server, $username, $password);   //Connecting Mysql;

  // //Connection Checking
  // if($con){
  //     echo "Connection Successful!";
  // }else{
  //     echo "No Connection Build!";
  // }

  //Database select(apply);
  mysqli_select_db($con, "quiztestfirst");

  $name = $_SESSION["nameOfUser"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome - Clever Coder</title>
    <link rel="stylesheet" href="Css/OpeningForAdminStyle.css">
        <!-- preloader css link  -->
        <link rel="stylesheet" href="Css/preloader.css">
    <link rel="icon" href="Images/bnr-1.png">
</head>
<body>

    <!-- preloader  -->
    <div id="preloader"></div>

    <!-- old part -->
    <div class="main" >
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Coder</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="OpeningForAdmin.php">HOME</a></li>
                    <li><a href="#services-container">SERVICES</a></li>
                    <li><a href="#client-section">COURSES</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </div>

            <div class="search">
                <form action="searchForOpeningAfterLoginByAdmin.php" method = "post">
                    <input class="srch" type="search" name="searchResult" placeholder="Type To text">
                    <button  type="submit" class="btn">Search</button>
                </form>
            </div>

        </div> 
        <div class="content">

            <div class="text">
                <h1>Welcome <br><span>Home Sourav</span> </h1>
                <p class="par">Hello Sourav. Welcome to Clever Coder family. We are the first educational website to provide free tutorial of coding. We also take online coding class for free. We provide some game like Quiz game, Snake game and Tic Tac Toe game. You just only need to join our family to play those games. We all know that a game can able to increase the IQ level of human means student. Tic-tac-toe helps children develop their spatial skills like logical thinking. In Quiz game we provide you 5 question and you have to answer from those question. After giving the exam, we the clever coder authority showing you that, what mark you get from this test. </p>
                
                <a href="Dashboard.php"><button class="cn">Dashboard</button></a>
                <a href="LogOut.php"><button class="cn">Log Out</button></a>
            </div>           
       
        </div>
    </div>


    <!-- new part -->
    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">            
            <div class="box">
                <img src="Images/GamesPic/snake.jpg" alt="">
                <h2 class="h-secondary center"><a href="snake.php">Snake Game</a> </h2>
                <p class="center">Snake is a video game genre where the player maneuvers a growing line that becomes a primary obstacle to itself. The concept originated in the 1976 two-player arcade game Blockade from Gremlin Industries, and the ease of implementation has led to hundreds of versions for many platforms. As it turns out, though, you can in fact finish the game, as evidenced by a GIF that appeared on a Russian forum on Monday. Running off the map or into your own vehicle will end the game.</p>
            </div>
            <div class="box">
                <img src="Images/GamesPic/TicTocToe.jpg" alt="">
                <h2 class="h-secondary center"><a href="TicTacToe.php">Tic Tac Toe</a></h2>
                <p class="center">Tic-tac-toe, noughts and crosses, or Xs and Os is a paper-and-pencil game for two players who take turns marking the spaces in a three-by-three grid with X or O. The player who succeeds in placing three of their marks in a horizontal, vertical, or diagonal row is the winner. By encouraging logical thinking, tic-tac-toe helps children develop their spatial skills.Impossible tic tac toe is designed to be unbeatable there's no way to win outright. However, that doesn't mean you have to lose either!</p>
            </div>
            <div class="box">
                <img src="Images/GamesPic/quiz.jpg" alt="">
                <h2 class="h-secondary center"><a href="InsideIndex.php">Quiz Test</a> </h2>
                <p class="center">A quiz is a form of game or mind sport in which players attempt to answer questions correctly about a certain or variety of subjects. Quizzes can be used as a brief assessment in education and similar fields to measure growth in knowledge, abilities, or skills.Here we have quiz related to database. We provide you 5 question and you have to answer from those question. After giving the exam, we the clever coder authority showing you that, what mark you get from this test.</p>
            </div>
        </div>
    </section>


    <section id="client-section">
        <h1 class="h-primary center">Our Courses</h1>
        <!-- First row  -->
        <div id="clients">
            <div class="client-item">
                <a href="https://www.youtube.com/watch?v=lCXPiZ55S9Y&list=PLGxL7j9XYpSytZBWsiMq8tg-_V3s5AXSs" target="blank"><img class="blur" src="Images/CoursesIcons/python.png" alt="Our Client"></a>
            </div>
            <div class="client-item">
                <a href="https://www.youtube.com/watch?v=7I0lLZIoTII&list=PLGxL7j9XYpSwHM3ZL0CKv5QlveaZJGIqs" target="blank"><img class="blur" src="Images/CoursesIcons/code.png" alt="Our Client"></a>
            </div>
          
            <div class="client-item">
                <a href="https://www.youtube.com/c/CleverCoder/videos" target="blank"><img class="blur" src="Images/CoursesIcons/programming.png" alt="Our Client"></a>
            </div>
            <div class="client-item">
                <a href="https://www.youtube.com/c/CleverCoder/videos" target="blank"><img class="blur" src="Images/CoursesIcons/ts.png" alt="Our Client"></a>
            </div>
        </div>

        <!-- Second Row  -->
        <div id="clients">
            <div class="client-item">
                <a href="https://www.youtube.com/watch?v=Tan7ZJ884Lo&list=PLGxL7j9XYpSzObPpR4xiuiCBryOyL1NL8" target="blank"><img class="blur" src="Images/CoursesIcons/java.png" alt="Our Client"></a>
            </div>
            <div class="client-item">
                <a href="https://www.youtube.com/watch?v=7I0lLZIoTII" target="blank"><img class="blur" src="Images/CoursesIcons/visual-basic.png" alt="Our Client"></a>
            </div>
          
            <div class="client-item">
                <a href="https://www.youtube.com/c/CleverCoder/videos" target="blank"><img class="blur" src="Images/CoursesIcons/graphicsDesign.png" alt="Our Client"></a>
            </div>
            <div class="client-item">
                <a href="https://www.youtube.com/c/CleverCoder/videos" target="blank"><img class="blur" src="Images/CoursesIcons/nodejs.png" alt="Our Client"></a>
            </div>            
        </div>

        <!-- Third Row  -->
        <div id="clients">
            <div class="client-item">
                <a href="https://www.youtube.com/watch?v=fj2oawGmAK0&list=PLGxL7j9XYpSwoQVjjPMRiGV0fV75_ee_E" target="blank"><img class="blur" src="Images/CoursesIcons/js.png" alt="Our Client"></a>
            </div>
            <div class="client-item" >
                <a href="https://www.youtube.com/c/CleverCoder/videos" target="blank"><img class="blur" src="Images/CoursesIcons/coding.png" alt="Our Client"></a>
            </div>
          
            <div class="client-item">
                <a href="https://www.youtube.com/watch?v=7I0lLZIoTII&list=PLGxL7j9XYpSwHM3ZL0CKv5QlveaZJGIqs" target="blank"><img class="blur" src="Images/CoursesIcons/programming-language.png" alt="Our Client"></a>
            </div>
            <div class="client-item">
                <a href="https://www.youtube.com/c/CleverCoder/videos" target="blank"><img class="blur" src="Images/CoursesIcons/php.png" alt="Our Client"></a>
            </div>
        </div>
        
    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action ="ContactInfoWriteAfterSingIn.php" method = "post">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                </div>
                <div class="subBtnn">
                    <button type="submit" class="btnn">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy;<a href="https://www.youtube.com/c/CleverCoder" target="blank" style="text-decoration: none">www.clevercoder.com.</a> All rights reserved!
        </div>
    </footer>
    <!-- preloader  -->
    <script src="JS/preloader.js"></script>  
</body>
</html>

