<?php include 'index.php';

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
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

#myTable {
  border-collapse: collapse;
  width: 70%;
  border: 4px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: center;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>


  
  
<h2>All Games</h2>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for games.." title="Type in a game">

<?php 
$sql = "SELECT * FROM games LEFT JOIN reviews ON reviews.GameID = games.GameID";
//$id = 16;
$result = $db->prepare($sql);
$result->execute();
$colCount = 0;
if ($result->rowCount() > 0) {
  
  ?>
  <form name="gamelist" action="gamelistGameAdd.php">
  <table id="myTable" class="center">
    <tr COLSPAN=2 BGCOLOR="#6D8FFF">
      <th style="width:60%;">Game</th>
      <th style="width:30%;">Rating</th>
      <th style="width:10%">Rate</th>
      <th style="width:10%">Add</th>

    </tr>
 <?php         
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
$colCount =+ 1;
  ?>
    
    <tr>
      <td><?php echo $row['gamename']."<br />\n"?></td>
      <td><?php echo $row['rating']."<br />\n"?></td>
      <td><button type="button" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#myModal<?php echo $row['GameID']?>'>Rate Game</button></td>
      <td><button type="button" class="btn btn-primary" id="GameID"><a href='gamelistGameAdd.php'>Add game</a></button></td>
    </tr>
  
  <!--Modal-->
  <div class='modal' id='myModal<?php echo $row['GameID']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        
        <!--Modal Header-->
        <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><?php echo $row['gamename']?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          The game's current rating: <?php echo $row['rating']?> / 5 <br>
          Enter your own rating: <input type="number" id='myRating' something='myRatingFunction' placeholder="X" title="Type in a rating">
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" id="btnsubmit" class="btn btn-primary"> Save Changes </button>
        </div>
      
      </div>
    </div>
  </div>
  
  
  
<?php
}
 ?>
</table>
  </form>
<?php
}
 ?>
 
  <script>
    
  $('#myModal').modal({
    backdrop: 'static' // set a default value
  });
    
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  document.getElementById("btnsubmit").onclick = function() {updateRating()};
  function updateRating() { 
    if (isset($_POST['rating'])){
    $column_1 = $_POST['Col1'];
    $column_2 = $_POST['Col2'];
    foreach ($_POST['KeyColumn'] as $key => $rating){
        $select = "SELECT * FROM reviews WHERE KeyColumn='".$rating."'";
        $result = $conn->query($select);
        if ($result->num_rows>0){
            while ($row=$result->fetchassoc()){
                $same = true;
                if (($row['Col1'] != $Col1[$key]) or ($row['Col2'] != $Col2[$key])){
                    $same = false;
                }
                if (!$same){
                     <?php 
                      $sql ='INSERT INTO reviews (rating) VALUES (?)';
                      $stmt =$db->prepare($sql);
                      $stmt->execute();
                  ?>
                }
            }
        }
    }
    
}
  </script>

</body>
</html>

