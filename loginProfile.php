<?php include("sqlpassword.php");
session_start();

$db = new PDO('mysql:host=localhost;dbname=gamelogapp;', $sqluser, $sqlpassword);
?>

<!DOCTYPE html>
<html>
 
  
  <h1>Personal Page</h1>
 <?php
 echo $_SESSION["username"];
?>
 
</html>
