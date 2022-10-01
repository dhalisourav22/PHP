<?php
$searchText = $_POST["searchResult"];
$searchText = strtolower($searchText);   //make search data all lower to ignore case sensetive.

if($searchText == "home"){
    header("location:Opening.php");
}
elseif($searchText == "services"){
    header("location:Opening.php #services-container");
}
elseif($searchText == "courses"){
    header("location:Opening.php #client-section");
}
elseif($searchText == "contact"){
    header("location:Opening.php #contact");
}
elseif($searchText == "about"){
    header("location:OpeningAboutNotLogin.php");
}
else{
    header("location:Opening.php");
}

?>