<?php

$servername = "3.9.173.117";
$dBUsername = "mealville";
$dBPassword = "ville123";
$dBName = "mealdb";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed:" .mysqli_connect_error());
}
?>

