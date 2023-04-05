<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {margin: 0;}
      
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
  </head>
<body>
  <?php
    session_start();
    if (isset($_SESSION['usertype'])) {
      $usertype = $_SESSION['usertype'];
      if ($usertype == 1) {
        $homepage = "index_X.php";
        $signupPage = "registration_X.php";
      } 
      /*
      else if ($usertype == 2) {
        $homepage = "staff.php";
        $signupPage = "staffsignup.php";
      }
       */ 
    } else {
      $homepage = "index_X.php";
      $signupPage = "registration_X.php";
    }
    ?>
  
  <ul class="topnav">
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="#games">Games</a></li>
  <li><a href="#reviews">Reviews</a></li>
  <li class="right"><a href="#account">Account</a></li>
</ul>

<div style="padding:0 16px;">
  <h1>Game Log</h1>
</div>
<p>This is a temporary home page for the Game Log Project.</p>
<p><a href="registration.html">Create an account</a></p>
<a href="login.html">Login to account</a>

</body>
</html>
