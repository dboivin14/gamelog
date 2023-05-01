<?php include 'index.php';?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
#card-deck {
  .card{
    flex-basis: 200px;
  }
}

</style>
</head>
<?php
$sql = "SELECT * FROM reviews LEFT JOIN games ON games.GameID = reviews.GameID";
$result= $db->prepare($sql);
$result->execute();
//$rows = $result->fetchAll();
//foreach ($rows as $games){
if($result->rowCount()>0){
  //echo $row[gamename];
    ?>
  
    <div class='card-deck'>
      <div class='card'>
        <div class="card-header">
            <h4 class="card-title">GAMES:</h4>
          </div>
      </div>  
      <?php
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <div class="card">  
          <div class="card-body">
            <h4 class="card-title"><?php echo $row['gamename'] ?></h4>
            <p class="card-text">
              Steam ID: <?php echo $row['GameID'] ?><br>
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