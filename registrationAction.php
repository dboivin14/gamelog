<?php

$firstname = $_POST ["fname"];
$lastname = $_POST ["lname"];
$dob = $_POST ["dob"];
$email = $_POST ["email"];
$username = $_POST ["user"];
$password = $_POST ["pwd"];

var_dump($firstname, $lastname, $dob, $email, $username, $password);



require __DIR__ . "DBCONNECT.php";


$sql = "INSERT INTO users (username, email, firstname, lastname, password, dob)
		VALUES (?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql) {
	die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssss",
					   $username,
					   $email,
					   $firstname,
					   $lastname,
					   $password,
					   $dob);

mysqli_stmt_execute($stmt);






?>
