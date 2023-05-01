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
 
    <div class='row row-cols-3 g-3'>
      <div class ='col'>
      <div class='card'>
        <div class="card-header">
            <h4 class="card-title">GAMES:</h4>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for games.." title="Type in a game"> 
          </div>
      </div>
      </div>
      <?php
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <div class ='col'>
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

        </div>
      
<?php 
}
?>
 </div>
<?php 
}

?>  
  <script>
  function myFunction() {
    var input, filter, card, h4, p, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    card = document.getElementById("card");
    h4 = card.getElementsByTagName("h4");
    for (i = 0; i < h4.length; i++) {
      p = h4[i].getElementsByTagName("p")[0];
      if (p) {
        txtValue = p.textContent || p.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          h4[i].style.display = "";
        } else {
          h4[i].style.display = "none";
        }
      }       
    }
  }
  </script>

</body>
</html>