<?php include 'index.php'; if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";

$sql = "SELECT * reviews LEFT JOIN games ON games.GameID = reviews.GameID";
  
  
  
  //$count = $db->query("SELECT count(*) FROM reviews")->fetchColumn();
  //echo $count;
  $result= $db->prepare($sql);
  $result->execute();
$colCount = 0;
if (gettype($result) == "object") {
//  if ($result->rowCount() > 0) {
    //$result= '<div class="row">';
?>    
  <div class="card-group">    
    <div class="card">
      <div class="card-body">
          <h4 class="card-title">GAMEID</h4>
          <p class="card-text">
            Game Name: Name<br>
            Rating: Rating<br>
            User: ID#<br>
            Review: ReviewText<br>
            Date Created: 5/1/23
          </p>
        </div>
<?php
    $row = $result->fetchAll();
    foreach($row as $db){
    //while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      print_r("1");
      $colCount += 1;

      ?>

        <div class="card-body">
          <h4 class="card-title"><?php echo $row['GameID'] ?></h4>
          <p class="card-text">
            Game Name: <?php echo $row['gamename'] ?><br>
            Rating: <?php echo $row['rating'] ?><br>
            User: <?php echo $row['ReviewID'] ?><br>
            Review: <?php echo $row['reviewtext'] ?><br>
            Date Created: <?php echo $row['Date'] ?>
          </p>
        </div>
      
      
      <?php
      //if ($colCount%2 == 0) {
      //  $result= '</div><div class="row">';
      //}
      
    }
    //$result= '</div>';
    ?>
    </div>
  </div>
    <?php
   $count -= 1;
  }
//} else {
//  echo $result;

//}


print_r($db->errorInfo());
?>

</body>
</html>