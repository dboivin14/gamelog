<?php include 'index.php';

$username = $_POST["username"];
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$dob = $_POST["dob"];



$sql = "INSERT INTO users (0,0,username, email, firstname, lastname, password, dob,0,0)
		VALUES (0,0,?,?,?,?,?,?,0,0)";

$stmt= $db->prepare($sql);
$stmt->execute([$username, $email, $firstname, $lastname, $password, $dob]);








?>
