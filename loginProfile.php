<?php include("sqlpassword.php");
session_start();

$db = new PDO('mysql:host=localhost;dbname=gamelogapp;', $sqluser, $sqlpassword);
?>

<!DOCTYPE html>
<html>
 
  
  <h1>Personal Page</h1>
 
 <?php
<html> Hello, </html> echo $_SESSION["name"];
?>
 
</html>
