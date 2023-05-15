<?php 
include('index.php');
?>

<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
      body {
        margin: 0;
        
      }
      
      ul.topnav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
      }

      ul.topnav li {float: left;}

      ul.topnav li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      ul.topnav li a:hover:not(.active) {background-color: #111;}

      ul.topnav li a.active {background-color: #04AA6D;}

      ul.topnav li.right {float: right;}

      @media screen and (max-width: 600px) {
        ul.topnav li.right, 
        ul.topnav li {float: none;}
      }
   button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  
   }
    </style>
  <body>

   <h1>Personal Page</h1>
 </body>
 <?php
 echo 'Welcome, ', $_SESSION["name"];
?>
  
  <a href = "gamelist.php">
    <button><a href="gamelistGameAdd.php"> Add Games </a> </button>
  </body>
  
  
</html>
 
  
  

