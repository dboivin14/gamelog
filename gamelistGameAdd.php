<?php include("sqlpassword.php");

  $db = new PDO('mysql:host=localhost;dbname=gamelogapp;', $sqluser, $sqlpassword);

  
  $GameID = (int)$_GET['GameID'];
  $stmt = $pdo -> prepare('SELECT * FROM games WHERE GameID = ?');
  $stmt -> execute([$_GET['GameID']]);
  
  $game = $stmt->fetch(PDO::FETCH_ASSOC);
  
  $sql = "INSERT IGNORE INTO usergames (UserGamesID, UserID, GameID, Date)
		VALUES (?,?,?,?)";                
  $_SESSION['usergames'] = array($gameID)
	  
  
 
  
  
?>
