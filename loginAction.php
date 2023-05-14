<?php include'index.php';

    
$user = $_POST["username"];
$pwd = $_POST["pwd"];

  $sql = "select username, password, firstname, lastname from users where username = '".$user.
          "' and password = '".$pwd."'";
  
  $result= $db->prepare($sql);
  $result->execute();

  if (gettype($result) == "object") {
    if ($result->rowCount() > 0) {
      $row = $result->fetch(PDO::FETCH_ASSOC);
      $firstname = $row['firstname'];
      $lastname = $row['lastname'];
      session_start();
      $_SESSION['id'] = $firstname." ".$lastname;
      header("Location:welcome.php");
      exit;
    } else
      echo "Login Failed";
  } else
    echo $result . "<br>";
    
    $sql = sprintf("SELECT * FROM users
        WHERE username = '%s'",
        $_POST["usernmame"]);


?>
