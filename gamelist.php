<?php include 'index.html'; ?>

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

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Game</th>
    <th style="width:40%;">Rating</th>
  </tr>
  <tr>
    <td>Dredge</td>
    <td>9.4</td>
  </tr>
  <tr>
    <td>Hi-Fi Rush</td>
    <td>9.0</td>
  </tr>
  <tr>
    <td>Metroid Prime Remastered</td>
    <td>8.8</td>
  </tr>
  <tr>
    <td>Hogwarts Legacy</td>
    <td>8.8</td>
  </tr>
  <tr>
    <td>Dead Space</td>
    <td>8.8</td>
  </tr>
  <tr>
    <td>Persona 4 Golden</td>
    <td>8.8</td>
  </tr>
  <tr>
    <td>Kirby's Return to Dream Land Deluxe</td>
    <td>8.7</td>
  </tr>
  <tr>
    <td>Wild Hearts</td>
    <td>8.6</td>
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

</body>
</html>

