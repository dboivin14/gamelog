<?php include 'index.php';

//$firstname = $stmt["firstname"];
//$lastname = $stmt["lastname"];
//$dob = $stmt["dob"];
//$email = $stmt["email"];
//$username = $stmt["username"];
//$password = $stmt["password"];

//var_dump($firstname, $lastname, $dob, $email, $username, $password);


//include("sqlpassword.php"); //Note from Spencer, needs to use this file here
//$db = new PDO('mysql:host=localhost;dbname=enter database name here;charset=utf8', $id, $password);
//$stmt = mysqli_stmt_init($conn);
//$sql = "INSERT INTO users (username, email, firstname, lastname, password, dob)
		//VALUES (?,?,?,?,?,?)";
$data = [
    'username' => $username,
    'email' => $email,
    'firstname' => $firstname,
    'lastname' => $lastname,
    'password' => $password,
    'dob' => $dob
];
$sql = "INSERT INTO users (username, email, firstname, lastname, password, dob) VALUES (:username, :email, :firstname, :lastname, :password, :dob)";
$stmt= $db->prepare($sql);
$stmt->execute($data);

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
