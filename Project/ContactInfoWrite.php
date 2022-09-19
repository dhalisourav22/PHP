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
    
    if($name == "" || $email == "" || $phone == "" || $message == ""){
        header("location:Opening.php #contact");   //redile;
    }else{
        header("location:Opening.php");
        $insertData = "insert into contact (Name, Email, Phone, Message) values('$name', '$email', '$phone', '$message')";
        mysqli_query($con, $insertData);    //Appling this query;
    }    
?>
