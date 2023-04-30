<?php include 'index.php'; if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";

$sql = "SELECT reviews.GameID, rating, UserID, reviewtext, Date FROM reviews LEFT JOIN games ON reviews.GameID = games.GameID WHERE (games.GameID) is null";
  
  $result= $db->prepare($sql);
  $result->execute();

$colCount = 0;
if (gettype($result) == "object") {
  if ($result->rowCount() > 0) {
    $result= '<div class="row">';
?>    
      <div class="col card">
<?php              
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      $colCount += 1;

      ?>

        <div class="card-body">
          <h4 class="card-title"><?php echo $row['GameID'] ?></h4>
          <p class="card-text">
            Game Name: <?php echo $row['gamename'] ?><br>
            Rating: <?php echo $row['rating'] ?><br>
            User: <?php echo $row['UserID'] ?><br>
            Review: <?php echo $row['reviewText'] ?><br>
            Date Created: <?php echo $row['Date'] ?>
          </p>
        </div>
      </div>
      
      <?php
      if ($colCount%2 == 0) {
        $result= '</div><div class="row">';
      }
      
    }
    $result= '</div>';
  }
} else {
  echo $result;

}


//print_r($db->errorInfo());
?>

</body>
</html>