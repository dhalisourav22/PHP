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
    
    if($userName == "" || $password == ""){
        header("location:IndexSingUp.php");   //redile;
    }else{
        header("location:Index.php");
        //Checking that have we this user name and password before;
        $forValidationChecking = "select * from signin where userName = '$userName' && password = '$password' ";
        $forValidationCheckingAppling = mysqli_query($con, $forValidationChecking);
        $numberOfDataPresent = mysqli_num_rows($forValidationCheckingAppling);

        if($numberOfDataPresent == 1 ){
            echo "Duplicate data";
        }else{    //inserting those data into database;
            $insertData = "insert into signin(userName, password) values('$userName', '$password')";
            mysqli_query($con, $insertData);    //Appling this query;
        }
    }    
?>
