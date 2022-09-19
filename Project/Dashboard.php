<?php
    session_start();    //new add
  
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);   //Connecting Mysql;

    ////Connection Checking
    // if($con){
    //     echo "Connection Successful!";
    // }else{
    //     echo "No Connection Build!";
    // }

    //Database select(apply);
    mysqli_select_db($con, "quiztestfirst");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/dashboard.css">    
    <!-- preloader css link  -->
    <link rel="stylesheet" href="Css/preloader.css">
    <title>Admin Dashboard - Clever Coder</title>
    <link rel="icon" href="Images/bnr-1.png">
</head>
<body>
    <!-- preloader  -->
    <div id="preloader"></div>

    <!-- navbar  -->
    <div class="main" >
        <div class="nav">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Coder</h2>
            </div>

            <div class="menu">
                <ul>                   
                    <li><a href="OpeningForAdmin.php">HOME</a></li>
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
        </div>

        <div class="content">
            <div class="text">
                <h1>Welcome To<br><span>The Admin Dashboard</span> </h1>
                <p class="par">Welcome Sourav Dhali(The CEO and Founder of Clever Coder). Here in the dashboard we are showing you the data of contact or you can say feedback and we also showing the data of studnts mark, That how much mark they get. By this result or marksheet you can justify student condition or many thing. Here you also can see the total number of subscriber in your page means coder family. You can also be able to log out from here if you want by pressing the log out button.</p>
                <a href="LogOut.php"><button class="cn">Log out</button></a>
            </div> 
        </div>

    </div>    


    <div class="totalsub_container">
        <div class="totalsub">
            <?php
                $queryForTotalNumberOfSub = "select * from signin";
                $queryForTotalNumberOfSubApply = mysqli_query($con, $queryForTotalNumberOfSub);  //This is return an array of every rows.
                $numOfRows = mysqli_num_rows($queryForTotalNumberOfSubApply);  //count how many rows in this.
            ?>
                <h2 class="subText">The Number Of Total Subscriber Is : <?php echo $numOfRows?></h2>
        </div>
    </div>

    <!-- table  Feedback-->
    <div class="table_container">
        <div class="table_heading">
            <h1 class="kindOfAheading">Our Feedback</h1>
        </div>
        <div class="table">

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $queryForFeedback = "select * from contact";
                    $queryForFeedbackApply = mysqli_query($con, $queryForFeedback);  //This is return an array of every rows.
                    
                    while($result = mysqli_fetch_array($queryForFeedbackApply)){  
                    //means first row of fetched query plased into $result(which is also a arry) for the first iteration, this is continuous process for the loop, it fetch one by one.
                    ?>

                        <tr>
                            <td><?php echo $result["Id"] ?></td>
                            <td><?php echo $result["Name"] ?></td>
                            <td><?php echo $result["Email"] ?></td>
                            <td><?php echo $result["Phone"] ?></td>
                            <td><?php echo $result["Message"] ?></td>
                        </tr>
                    
                    <?php
                    }    //while loop end
                    ?>

                </tbody>
            </table>
        </div>        
    </div>   <!-- End of container div -->


    <!-- Table marksheet  -->

    <div class="table_container">
        <div class="table_heading">
            <h1 class="kindOfAheading">Quiz Marksheet</h1>
        </div>
        
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Total Question</th>
                        <th>Correct Answer</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $queryForMarksheet = "select * from user";
                    $queryForMarksheetApply = mysqli_query($con, $queryForMarksheet);  //This is return an array of every rows.
                    
                    while($result = mysqli_fetch_array($queryForMarksheetApply)){  
                    //means first row of fetched query plased into $result(which is also a arry) for the first iteration, this is continuous process for the loop, it fetch one by one.
                    ?>
                        <tr>
                            <td><?php echo $result["Id"] ?></td>
                            <td><?php echo $result["User_Name"] ?></td>
                            <td><?php echo $result["Total_Question"] ?></td>
                            <td><?php echo $result["Answer_Correct"] ?></td>
                        </tr> 
                        
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>        
    </div><!-- End of container div -->

    <footer>
        <div style="text-align: center">
            Copyright &copy;<a href="https://www.youtube.com/c/CleverCoder" target="blank" style="text-decoration: none">www.clevercoder.com.</a> All rights reserved!
        </div>
    </footer>




    <!-- preloader  -->
    <script src="JS/preloader.js"></script>  
    
</body>
</html>