<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up - Clever Coder</title>    
    <link rel="stylesheet" href="Css/StyleSingUp.css">
        <!-- preloader css link  -->
        <link rel="stylesheet" href="Css/preloader.css">
    <link rel="icon" href="Images/bnr-1.png">
</head>
<body>


    <!-- preloader  -->
    <div id="preloader"></div>

    <div class="main">
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
        <div class="content">         
            <div class="form">
                <h2>Sign Up Here</h2>

                <form action ="Registation.php" method = "post">
                    <input type="text" name="userName" placeholder="Enter Username Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <button type="submit" class="btnn">Sign Up</button>
                </form>
                <p class="link">Already have an account<br>
                <a href="Index.php">Log In</a> here</p>  

            </div>  
                   
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!-- preloader  -->
    <script src="JS/preloader.js"></script>  
</body>
</html>