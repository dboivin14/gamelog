<?php
session_start();
?>

<!DOCTYPE html>
<html>
 
  
  <h1>Personal Page</h1>
 <?php
 echo $session["username"];
?>
 
</html>
