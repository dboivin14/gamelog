<?php

if (empty($_POST["fname"])) {
	die("first name required");
}

if (empty($_POST["lname"])) {
	die("last name required");
}

if (empty($_POST["user"])) {
	die("username required");
}

if (empty($_POST["dob"])) {
	die("date of birth required required");
}

if (empty($_POST["pswd"])) {
	die("password required");
}

if($_POST["pwd"] !== $_POST["pswd"]) {
	die("Passwords must match");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) {
	die("Valid email required");

}

$password_hash = password_hash($_POST["pswd"], PASSWORD_DEFAULT);

$mysqli require __DIR__ . "DBCONNECT.php";

print_r($_POST)
var_dump($password_hash);

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