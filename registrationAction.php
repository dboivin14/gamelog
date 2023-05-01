<?php

$firstname = $_POST ["firstname"];
$lastname = $_POST ["lastname"];
$dob = $_POST ["dob"];
$email = $_POST ["email"];
$username = $_POST ["username"];
$password = $_POST ["password"];

var_dump($firstname, $lastname, $dob, $email, $username, $password);


//include("sqlpassword.php"); //Note from Spencer, needs to use this file here
//$db = new PDO('mysql:host=localhost;dbname=enter database name here;charset=utf8', $id, $password);

$sql = "INSERT INTO users (username, email, firstname, lastname, password, dob)
		VALUES (?,?,?,?,?,?)";
//$stmt = mysqli_stmt_init($conn);

$stmt= $db->prepare($sql);

mysqli_stmt_bind_param($stmt, "sssss",
					   $username,
					   $email,
					   $firstname,
					   $lastname,
					   $password,
					   $dob);

mysqli_stmt_execute($stmt);






?>
