<?php

require "DBConnect.php";

// collect form data
$fname = $_GET["firstname"];
$lname = $_GET["lastname"];
$dob = $_GET["dob"];
$email = $_GET["email"];
$username = $_GET["username"];
$pwd = $_GET["password"];

$verified = 0;
$usertype = 1;

$sql = "insert into customerregister values customerID, '" . $user . "', '" . $pswd . "', '" .
  $fname . "', '" . $lname . "','" . $dob . "','" . $email . "', '" . $verified . "' '" . $usertype . "'";
echo modifyDB($sql) . "<br>Use back button to return";
?>