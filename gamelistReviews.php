<?php include 'index.php'; if (isset($_GET['msg']))
  echo "<h2 class='w3-center'>" . $_GET['msg'] . "</h2>";


  
$sql = "SELECT * reviews LEFT JOIN games ON games.GameID = reviews.GameID";
            $result= $db->prepare($sql);
            $result->execute();
            //$rows = $result->fetchAll();
            //foreach ($rows as $games){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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
  <?php
    

      print_r("Test");
      //$colCount += 1;
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
      
      
      </div>
    </div>
  </div>
</div>
<?php 
      }
 ?>  


</body>
</html>