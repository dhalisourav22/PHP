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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake - Clever Coder</title>
    <link rel="stylesheet" href="Css/snakeGameStyle.css">

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




    <!-- For body  -->
    <div class="body">
        <?php
        if($name=="dhalisourav22" && $password=="764235171"){     //if use is admin
        ?>
            <div class="welcome-text">
                <h1> Welcome To Snake <br> Game Sourav !</h1>
            </div>
        <?php
        }
        else{                                                     //if user is not a admin.
        ?>
            <div class="welcome-text">
                <h1> Welcome To Snake br Game <?php echo $name?> !</h1>
            </div>   
        <?php
        }
        ?>

       

        <!-- showing score  -->
        <div class="contain-element">
            <div id="scoreBox">Score: 0</div>
            <div id="hiscoreBox">HiScore: 0</div>
            <!-- <div id="reset-div">
                <button type="Submit" id="reset">Reset</button>
            </div> -->
        </div>

        <!-- image  -->
        <div class="img"><img src="Images/GamesPic/snakeGame.png" alt=""></div>

        <!-- Containg game box where game will be play  -->
        <div id="board"></div>    

    </div>


    <!-- snake game js call  -->
    <script src="snakeScript.js"></script>
    <!-- preloader  -->
    <script src="JS/preloader.js"></script>  
</body>
<script src="snakeScript.js"></script>
</html>