<?php include 'index.php'; ?>

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
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
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
  <table id="myTable">
    <tr COLSPAN=1 BGCOLOR="#6D8FFF">
      <th style="width:60%;">Game</th>
      <th style="width:40%;">Rating</th>
    </tr>
 <?php         
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
  //$gamename = $row['gamename'];
//print_r($row);
$colCount =+ 1;
//foreach($db as $row){
  ?>
    
    <tr>
      <td><?php echo $row['gamename']."<br />\n"?></td>
      <td><?php echo $row['rating']."<br />\n"?></td>
    <button type="button" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#myModal'>
      Rate Game
    </button>
    </tr>
  
  <!--Modal-->
  <div class='modal' id='myModal'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        
        <!--Modal Header-->
        <div class="modal-header">
        <h4 class="modal-title"><?php echo $row['gamename']?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          The game's current rating: <?php echo $row['rating']?> / 5
          Enter your own rating: X
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      
      </div>
    </div>
  </div>
  
<?php
}
 ?>
</table>
<?php
}
//}
 ?>
 
  <script>
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
  </script>

</body>
</html>

