<?php
session_start();
?>

<!DOCTYPE html>
<html>
 
  
  <h1>Personal Page</h1>
 <?php
 echo $_SESSION["username"];
?>
 
</html>
