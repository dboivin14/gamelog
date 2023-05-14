<?php
clearstatcache();
unset($_SESSION['id']);
header("Location:index.php");
?>
