<?php
clearstatcache();
unset($_SESSION['id']);
header("Location:welcome.php");
?>
