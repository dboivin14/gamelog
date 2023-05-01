<?php include 'index.php';

$username = $_GET["username"];
$email = $_GET["email"];
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$password = $_GET["password"];
$dob = $_GET["dob"];


//include("sqlpassword.php"); //Note from Spencer, needs to use this file here
//$db = new PDO('mysql:host=localhost;dbname=enter database name here;charset=utf8', $id, $password);
//$stmt = mysqli_stmt_init($conn);
$sql = "INSERT INTO users (username, email, firstname, lastname, password, dob)
		VALUES (0,0,?,?,?,?,?,?)";

$stmt= $db->prepare($sql);
$stmt->execute($username, $email, $firstname, $lastname, $password, $dob);

//$db->prepare($sql)->execute([$username, $email, $firstname, $lastname, $password, $dob]);

//mysqli_stmt_bind_param($stmt, "sssss",
//					   $username,
//					   $email,
//					   $firstname,
//					   $lastname,
//					   $password,
//					   $dob);

//mysqli_stmt_execute($stmt);






?>
