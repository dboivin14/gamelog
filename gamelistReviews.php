<?php include 'index.php'; if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";

include 'sqlpassword.php';
$db = new PDO('mysql:host=localhost; dbname=gamelogapp;charset=utf8', $sqluser, $sqlpassword );
  //$sql = ('SELECT GameID, rating, UserID, reviewtext, Date FROM reviews ORDER BY GameID');
  //UNION ('SELECT GameID, GameName FROM games ORDER BY GameID');
$sql = "SELECT rewviews.GameID, rating, UserID, reviewtext, Date FROM reviews LEFT JOIN games ON reviews.GameID = games.GameID WHERE (games.GameID) is null";
  
  $result= $db->prepare($sql);
  $result-> execute();
$colCount = 0;
if (gettype($result) == "object") {
  if ($result->rowCount() > 0) {
    echo '<div class="row">';
    while ($row = $result->fetchall(PDO::FETCH_ASSOC)) {
      $colCount += 1;
      $GameName = $row['GameName'];
      $UserID = $row['UserID'];
      $rating = $row['rating'];
      $reviewText = $row['reviewtext'];
      $Date = $row['Date'];
      ?>
      <div class="col card">
        <div class="card-body">
          <h4 class="card-title"><?php echo $GameID ?></h4>
          <p class="card-text">
            Game Name: <?php echo $GameName ?><br>
            Rating: <?php echo $rating ?><br>
            User: <?php echo $UserID ?><br>
            Review: <?php echo $reviewText ?><br>
            Date Created: <?php echo $Date ?>
          </p>
        </div>
      </div>
      print_r($row);
      <?php
      if ($colCount%2 == 0) {
        echo '</div><div class="row">';
      }
      
    }
    echo '</div>';
  }
} else {
  echo $result;
  
}
print_r($result);
//echo json_encode($result);

?>

</body>
</html>