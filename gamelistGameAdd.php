<?php 
  

  
  $GameID = (int)$_POST['GameID'];
  $stmt = $pdo -> prepare('SELECT * FROM games WHERE GameID = ?');
  $stmt -> execute([$_POST['GameID']];
  
  $game = $stmt->fetch(PDO::FETCH_ASSOC);
  
  $sql = "INSERT IGNORE INTO usergames (UserGamesID, UserID, GameID, Date)
		VALUES (?,?,?,?)";                
                   
  if(isset($_SESSION['usergames']) && is_array($_SESSION['usergames'])) {
      if (array_key_exists($GameID, $_SESSION['usergames'])) {
          echo 'game already in list';
      } else {
      $_SESSION['usergames'][$GameID] = 1
      }
 else {
   $_SESSION['usergames'] = array($gameID)
 
  
  
?>
