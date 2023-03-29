<?php

require "DBConnect.php";

// collect form data
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$username = $_POST["user"];
$pwd = $_POST["pswd"];

$verified = 0;
$usertype = 1;

$sql = "insert into customerregister values customerID, '" . $user . "', '" . $pswd . "', '" .
  $fname . "', '" . $lname . "','" . $dob . "','" . $email . "', '" . $verified . "' '" . $usertype . "'";
echo modifyDB($sql) . "<br>Use back button to return";
?>