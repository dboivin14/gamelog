<?php include 'index.php';

$username = $_GET["username"];
$email = $_GET["email"];
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$password = $_GET["password"];
$dob = $_GET["dob"];



$sql = "INSERT IGNORE INTO users (username, email, firstname, lastname, password, dob)
		VALUES (?,?,?,?,?,?)";

$stmt= $db->prepare($sql);
$stmt->execute([$username, $email, $firstname, $lastname, $password, $dob]);
$stmt->close();







?>
