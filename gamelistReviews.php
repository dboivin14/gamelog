<?php include 'index.php'; if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";

$sql = "SELECT * reviews LEFT JOIN games ON games.GameID = reviews.GameID";
  


//if (gettype($result) == "object") {
?>
<div class="container">
  <div class="row">
    <div class="card-group">    
    <div class="card">
      <div class="card-header">
          <h4 class="card-title">GAMEID</h4>
          <p class="card-text">
            Game Name: Name<br>
            Rating: Rating<br>
            User: ID#<br>
            Review: ReviewText<br>
            Date Created: 5/1/23
          </p>
        </div>
    </div>
    <div class="card">  
        <div class="card-body">
          <?php
            $result= $db->prepare($sql);
            $result->execute();
            $rows = $result->fetchAll();
            foreach ($rows as $games){
          ?>  
        //</div>
      //</div>
<?php
    
    //while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      print_r("Test");
      //$colCount += 1;
      ?>
          <h4 class="card-title"><?php echo $row['GameID'] ?></h4>
          <p class="card-text">
            Game Name: <?php echo $row['gamename'] ?><br>
            Rating: <?php echo $row['rating'] ?><br>
            User: <?php echo $row['ReviewID'] ?><br>
            Review: <?php echo $row['reviewtext'] ?><br>
            Date Created: <?php echo $row['Date'] ?>
          </p>
        </div>
      </div>
      <?php 
    }
    ?>
    </div>
  </div>
</div>
  

    <?php
 // }
//print_r($db->errorInfo());
?>

</body>
</html>