<?php  
    session_start();
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);   //Connecting Mysql;

    //Connection Checking
    if($con){
        echo "Connection Successful!";
    }else{
        echo "No Connection Build!";
    }

    //Database select(apply);
    mysqli_select_db($con, "quiztestfirst");

    //Variable to recived data;
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    //Checking that have we this user name and password before;
    $forValidationChecking = "select * from signin where userName = '$userName' && password = '$password' ";
    $forValidationCheckingAppling = mysqli_query($con, $forValidationChecking);
    $numberOfDataPresent = mysqli_num_rows($forValidationCheckingAppling);

    if($numberOfDataPresent == 1 ){

        //creating sesion variable for further use.
        $_SESSION["nameOfUser"] = $userName;
        $_SESSION["passwordOfUser"] = $password;   //Our session variable name is "$_SESSION["passwordOfUser"]" and the value of that is $password which value we are geting through the login page;


        if($userName=="dhalisourav22" && $password == "764235171"){    //If use is admin then we send than in admin home page. where he or she will get dashboard.
            header("location:OpeningForAdmin.php");
        }
        else{
            header("location:AfterLogin.php");             //Redaile;(This is not admin thats why normal opening page)
        }
    }
    else{                                      //inserting those data into database;
        header("location:Index.php");          //Redaile;
    }
?>
