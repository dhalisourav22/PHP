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
  $password = $_SESSION["passwordOfUser"];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tic Tac Toe - Clever Coder</title>
    <!-- same css and js is use for admin and normal use both also  -->
    <link rel="stylesheet" href="Css/TicTacToe.css" />    
        <!-- preloader css link  -->
        <link rel="stylesheet" href="Css/preloader.css">
    <link rel="icon" href="Images/bnr-1.png">
  </head>
  <body>
        <!-- preloader  -->
        <div id="preloader"></div>

    <!-- admin and normal use come to the same file snake.php but the navbar link will be differnt in snake which we do by php if else  -->
    <!-- here we create 2 navbar for reduce redurnent code and use php for codition -->
    
    <?php
    if($name=="dhalisourav22" && $password=="764235171"){     //if use is admin
    ?>
    <nav>
      <div class="navbar">
            <div class="icon">
                <h2 class="logo">Coder</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="OpeningForAdmin.Php">HOME</a></li>
                    <li><a href="OpeningForAdmin.php #services-container">SERVICES</a></li>
                    <li><a href="OpeningForAdmin.php #client-section">COURSES</a></li>
                    <li><a href="OpeningForAdmin.php #contact">CONTACT</a></li>
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
    </nav>
    <?php
    }
    else{                                           //if user is not a admin.
    ?>
    <nav>
      <div class="navbar">
            <div class="icon">
                <h2 class="logo">Coder</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="AfterLogin.php">HOME</a></li>
                    <li><a href="AfterLogin.php #services-container">SERVICES</a></li>
                    <li><a href="AfterLogin.php #client-section">COURSES</a></li>
                    <li><a href="AfterLogin.php #contact">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                </ul>
            </div>

            <div class="search">
                <form action="searchForOpeningAfterLogin.php" method = "post">
                    <input class="srch" type="search" name="searchResult" placeholder="Type To text">
                    <button  type="submit" class="btn">Search</button>
                </form>
            </div>

      </div> 
    </nav>  
    <?php
    }
    ?>


    <!-- Game  -->
    <div class="gameContainer">
      <div class="container">
        <div class="line"></div>
        <div class="box bt-0 bl-0"><span class="boxtext"></span></div>
        <div class="box bt-0"><span class="boxtext"></span></div>
        <div class="box bt-0 br-0"><span class="boxtext"></span></div>
        <div class="box bl-0"><span class="boxtext"></span></div>
        <div class="box"><span class="boxtext"></span></div>
        <div class="box br-0"><span class="boxtext"></span></div>
        <div class="box bl-0 bb-0"><span class="boxtext"></span></div>
        <div class="box bb-0"><span class="boxtext"></span></div>
        <div class="box bb-0 br-0"><span class="boxtext"></span></div>
      </div>
      <div class="gameInfo">
        <h1>Welcome to Tic Tac Toe <?php echo $name?> !</h1>
        <div>
          <span class="info">Turn for X</span>
          <button id="reset">Reset</button>
        </div>
        <div class="imgbox">
          <img src="Images/TicTacToe/Bravo.gif" alt="" />
        </div>
      </div>
    </div>
  


    <script src="TicTacToe.js"></script>
        <!-- preloader  -->
        <script src="JS/preloader.js"></script>  
  </body>
</html>
