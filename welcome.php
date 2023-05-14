<?php 
session_start();
if (isset($_SESSION['id']))
  $name = $_SESSION['id'];
if (isset($_SESSION['staffid']))
  $stname = $_SESSION['staffid'];
?>
