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
    if($name=="dhalisourav22" && $password=="764235171"){    //If user is admin(Means his password of user name is same as admin then it admin) then we send than in admin home page. where he or she will get dashboard.
        header("location:OpeningForAdmin.php");
    }
    else{
       header("location:AfterLogin.php");             //Redaile;(This is not admin thats why normal opening page)
    }
?>