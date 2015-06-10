<?php
$seconds = -100 + time();
setcookie('loggedin',date("F js -g:i a",$seconds));
header("location:index.php");
?>