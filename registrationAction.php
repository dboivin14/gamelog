<?php include 'index.php';

$username = $_POST["username"];
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$dob = $_POST["dob"];



$sql = "INSERT INTO users ('','',username, email, firstname, lastname, password, dob,'','')
		VALUES (0,0,?,?,?,?,?,?,0,0)";

$stmt= $db->prepare($sql);
$stmt->execute([$username, $email, $firstname, $lastname, $password, $dob]);








?>
