<?php
$searchText = $_POST["searchResult"];
$searchText = strtolower($searchText);   //make search data all lower to ignore case sensetive.

if($searchText == "home"){
    header("location:AfterLogin.php");
}
elseif($searchText == "services"){
    header("location:AfterLogin.php #services-container");
}
elseif($searchText == "courses"){
    header("location:AfterLogin.php #client-section");
}
elseif($searchText == "contact"){
    header("location:AfterLogin.php #contact");
}
elseif($searchText == "about"){
    header("location:about.php");
}
else{
    header("location:AfterLogin.php");
}

?>