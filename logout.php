<?php
session_start();
unset($_SESSION['username']);


header("Location:homepageh.php");
session_destroy();
exit;
?>
