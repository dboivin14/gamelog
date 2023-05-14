<?php include'index.php';

    
$user = $_POST["username"];
$pwd = $_POST["pwd"];

  $sql = "select UserID, username, password, firstname, lastname from users where username = '".$user.
          "' and password = '".$pwd."'";
  
  $result= $db->prepare($sql);
  $result->execute();


    if ($result->rowCount() > 0) {
      $row = $result->fetch(PDO::FETCH_ASSOC);
      $UserID = $row['UserID'];
      $firstname = $row['firstname'];
      $lastname = $row['lastname'];
      session_start();
      $_SESSION['id'] = $UserID
      $_SESSION['name'] =    $firstname." ".$lastname;
      header("Location:welcome.php");
      exit;
    } else { 
      echo "Login Failed";
    }
    
    //$sql = sprintf("SELECT * FROM users
        //WHERE username = '%s'",
        //$_POST["usernmame"]);


?>
