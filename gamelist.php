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

<?php 
$sql = "SELECT GameName FROM games";

$result = $db->query($sql);

while ($row = $result->fetch(PDO::FETCH_ASSOC)){
  $GameName = $row['GameName'];

    ?>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for games.." title="Type in a game">

  <table id="myTable">
    <tr class="header">
      <th style="width:60%;">Game</th>
      <th style="width:40%;">Rating</th>
    </tr>
    <tr>
      <td><?php echo $GameName?></td>
      <td>##</td>
    </tr>
  </table>

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
<?php 

}
  echo $result;
 ?>

</body>
</html>

