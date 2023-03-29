<?php

require "DBConnect.php";

// collect form data
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$username = $_POST["username"];
$pwd = $_POST["password"];

$verified = 0;
$usertype = 1;

$sql = "insert into customerregister values customerID, '" . $user . "', '" . $pswd . "', '" .
  $fname . "', '" . $lname . "','" . $dob . "','" . $email . "', '" . $verified . "' '" . $usertype . "'";
echo modifyDB($sql) . "<br>Use back button to return";
?>