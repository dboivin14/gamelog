<?php include 'index.php'; if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";

include 'sqlpassword.php';
$db = new PDO('mysql:host=localhost;dbname=gamelogapp;', $sqluser, $sqlpassword);
$sql = 'SELECT GameID, rating, UserID, reviewtext, Date FROM reviews';
$result= mysqli_query($sql);
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
  echo $result;
}
?>
