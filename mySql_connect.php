<?php
$username = "root";
$password = "";
$hostname = "localhost";
$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database server ");
$selected = mysql_select_db("ticdoc",$dbhandle) or die("Opps, Data Base 'ticdoc' could not be selected");
?>