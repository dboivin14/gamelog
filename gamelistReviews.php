<?php include 'index.php';

$sql = "SELECT * FROM reviews LEFT JOIN games ON games.GameID = reviews.GameID";
$result= $db->prepare($sql);
$result->execute();
//$rows = $result->fetchAll();
//foreach ($rows as $games){
if($result->rowCount()>0){
  //echo $row[gamename];
    ?>
  
    <div class='card-group'>
      <div class='card'>
        <div class="card-header">
            <h4 class="card-title">GAMEID</h4>
          </div>
      </div>  
      <?php
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <div class="card">  
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
      
<?php 
}
?>
 </div>
<?php 
}
echo $result;
?>  


</body>
</html>