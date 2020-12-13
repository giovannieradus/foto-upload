<?php
require 'config.php';

require 'session.php';
$Naam = $_POST['naam'];
$Datum = $_POST['datum'];



$query = "INSERT INTO `EVENT` VALUES (NULL,'$Naam','$Datum')";



if (mysqli_query($mysqli ,$query)) {
    header("Location: index.php");
   
   

}
else {
    echo 'Try again, Remove the quote signs';
}
?>