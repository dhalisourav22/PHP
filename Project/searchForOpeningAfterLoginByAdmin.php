<?php
$searchText = $_POST["searchResult"];
$searchText = strtolower($searchText);   //make search data all lower to ignore case sensetive.

if($searchText == "home"){
    header("location:OpeningForAdmin.php");
}
elseif($searchText == "services"){
    header("location:OpeningForAdmin.php #services-container");
}
elseif($searchText == "courses"){
    header("location:OpeningForAdmin.php #client-section");
}
elseif($searchText == "contact"){
    header("location:OpeningForAdmin.php #contact");
}
elseif($searchText == "about"){
    header("location:about.php");
}
else{
    header("location:OpeningForAdmin.php");
}

?>