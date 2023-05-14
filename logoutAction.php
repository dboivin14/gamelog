<?php
clearstatcache();
unset($_SESSION['id']);
unset($_SESSION['name']);
header("Location:login_X.php");
?>
