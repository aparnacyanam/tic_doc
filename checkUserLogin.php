<?php
include("./mySql_connect.php");
session_start();
$user_check=$_SESSION['loggedin_user'];

$sql=mysql_query("SELECT * FROM log_in WHERE username='$user_check' ");

$row=mysql_fetch_array($sql);

$login_session=$row['username'];

$key=$row['Emp_id'];

$query="SELECT * FROM emp_details WHERE Emp_id='$key'";
$return=mysql_query($query);
$emp_row=mysql_fetch_array($return);

$emp_id=$emp_row['Emp_id'];
$emp_name=$emp_row['Ename'];
$emp_email=$emp_row['email_id'];
$emp_dept=$emp_row['dept_id'];

if(!isset($login_session))
{
header("location:index.php");
}
?>