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
    // $userName = $_POST["userName"];
    // $password = $_POST["password"];

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    

    $nameOfUser = $_SESSION["nameOfUser"];
    $password = $_SESSION["passwordOfUser"];
    if($nameOfUser=="dhalisourav22" && $password=="764235171"){                               //If use is admin then we send than in admin home page. where he or she will get dashboard.
        
        if($name == "" || $email == "" || $phone == "" || $message == ""){     //If anything is blank.
            header("location:OpeningForAdmin.php #contact");   //redile;
        }else{
            header("location:OpeningForAdmin.php");
            $insertData = "insert into contact (Name, Email, Phone, Message) values('$name', '$email', '$phone', '$message')";
            mysqli_query($con, $insertData);    //Appling this query;
        }
    
    }


    else{                                                   //Redaile;(This is not admin thats why normal opening page)
        
        if($name == "" || $email == "" || $phone == "" || $message == ""){
            header("location:AfterLogin.php #contact");   //redile;
        }else{
            header("location:AfterLogin.php");
            $insertData = "insert into contact (Name, Email, Phone, Message) values('$name', '$email', '$phone', '$message')";
            mysqli_query($con, $insertData);    //Appling this query;
        }                
    }


    
?>
