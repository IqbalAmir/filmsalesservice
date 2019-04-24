<?php


$dbServername = "localhost";
$dbUsername = "u1751546";
$dbPassword = "03jan98";
$dbName = "filmsalesservice";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if ($conn==false){
  echo "Error: Could not connect";

}
