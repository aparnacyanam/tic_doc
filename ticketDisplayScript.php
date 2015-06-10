<?php

//include("./checkUserLogin.php");
include("./mySql_connect.php");
$emp_query = "SELECT * FROM ticket_information where asigner_id=10002 ";
$result = mysql_query($emp_query);

$row=  mysql_fetch_row($result, MYSQL_ASSOC);



?>
