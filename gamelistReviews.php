<?php include 'index.php'; if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";

include 'sqlpassword.php';
$db = new PDO('mysql:host=localhost; dbname=gamelogapp;charset=utf8', $sqluser, $sqlpassword );
$sql = SELECT ('SELECT GameID, rating, UserID, reviewtext, Date FROM reviews') AS table_a
    UNION
  (SELECT GameID, GameName FROM games) AS table_b ORDER BY GameID FROM DUAL;
$result= $db->query($sql)->fetch();
$colCount = 0;
if (gettype($result) == "object") {
  if ($result->num_rows > 0) {
    echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
      $colCount += 1;
      $GameName = $row['GameName'];
      $UserID = $row['UserID'];
      $rating = $row['rating'];
      $reviewText = $row['reviewtext'];
      $Date = $row['Date'];
      ?>
      <div class="col card">
        <div class="card-body">
          <h4 class="card-title"><?php echo $name ?></h4>
          <p class="card-text">
            Game Name: <?php echo $GameName ?><br>
            Rating: <?php echo $rating ?><br>
            User: <?php echo $UserID ?><br>
            Review: <?php echo $reviewText ?><br>
            Date Created: <?php echo $Date ?>
          </p>
        </div>
      </div>
      <?php
      if ($colCount%2 == 0) {
        echo '</div><div class="row">';
      }
    }
    echo '</div>';
  }
} else {
  $result;
 
}
echo json_encode($result);
?>
