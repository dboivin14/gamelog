<?php 
  

  
  $GameID = (int)$_POST['GameID'];
  $stmt = $pdo -> prepare('SELECT * FROM games WHERE GameID = ?');
  $stmt -> execute([$_POST['GameID']]);
  
  $game = $stmt->fetch(PDO::FETCH_ASSOC);
  
  $sql = "INSERT IGNORE INTO usergames (UserGamesID, UserID, GameID, Date)
		VALUES (?,?,?,?)";                
  $_SESSION['usergames'] = array($gameID)
	  
  
 
  
  
?>
