<?php include 'index.php'; if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";

include 'sqlpassword.php';
$db = new PDO('mysql:host=localhost; dbname=gamelogapp;charset=utf8', $sqluser, $sqlpassword );
$sql = "SELECT reviews.GameID, rating, UserID, reviewtext, Date FROM reviews LEFT JOIN games ON reviews.GameID = games.GameID WHERE (games.GameID) is null";
  
  $result= $db->query($sql);

  //$count = ($result->columnCount());
  //echo ($count);
$colCount = 0;
if (gettype($result) == "object") {
  if ($result->columnCount() > 0) {
    echo '<div class="row">';
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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
      
      <?php
      if ($colCount%2 == 0) {
        echo '</div><div class="row">';
      }
      
    }
    echo '</div>';
  }
} else {
  return $result;
  print_r($row);
}
print_r($result);

print_r($db->errorInfo());
?>

</body>
</html>