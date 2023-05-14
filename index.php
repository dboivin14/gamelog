<?php include("sqlpassword.php");

$db = new PDO('mysql:host=localhost;dbname=gamelogapp;', $sqluser, $sqlpassword); 
session_start();
if (isset($_SESSION['id']))
  $name = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        margin: 0;
        background-color: grey;
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
    </style>
    <title>Game Log Test Page</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
  <ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="gamelist.php">Games</a></li>
  <li><a href="gamelistReviews.php">Reviews</a></li>
  <?php if(isset($name)): ?>
    <li class='right'><a href='#account'>Welcome<?php echo $name?></a></li>
 
      <li class='right'><a href="logoutAction.php">Logout</a></li> 
  <?php else: ?>
    <li class="right"><a href="registration_X.php">Register</a></li>
    <li class="right"><a href="login_X.php">Login</a></li>
  <?php endif; ?>
  
</ul>
  
<div class="imgcontainer">
  <img src="gamelog_logo.png" alt="Avatar" class="avatar">
</div>
  
<div style="padding:0 16px;">
  
  <h1>Game Log</h1>
  <p>This is a temporary home page for the Game Log Project.</p>
</div>



</body>
</html>
