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
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
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
              <button type="button" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#myModal<?php echo $row['GameID']?>'>Rate Game</button></td>
          </div>
      </div>

        </div>
 
<?php 
}
?>
        <!--Modal-->
       
  <div class='modal' id='#myModal<?php echo $row['GameID']?>' tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        
        <!--Modal Header-->
        <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Review the Game!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <p class="card-text">
              Steam ID: <?php echo $row['GameID'] ?><br>
              Rating: <?php echo $row['rating'] ?><br>
              User: <?php echo $row['ReviewID'] ?><br>
              Review: <?php echo $row['reviewtext'] ?><br>
              Date Created: <?php echo $row['Date'] ?>
            </p>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" id="btnsubmit" class="btn btn-primary"> Save Changes </button>
        </div>
      
      </div>
    </div>
  </div>
   
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
