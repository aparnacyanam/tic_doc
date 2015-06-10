<?php
include('./checkUserLogin.php');

$_SESSION['error']='';

$description=mysql_real_escape_string($_POST['description']);
$title=mysql_real_escape_string($_POST['title']);
$urgency=mysql_real_escape_string($_POST['urgency']);
$department=mysql_real_escape_string($_POST['departments']);

date_default_timezone_set('America/New_York');
$today = date("Y-m-d H:i");

$emp_query = "SELECT Emp_id FROM emp_details WHERE dept_id = '$department' ORDER BY RAND() LIMIT 1";
$rand_emprow = mysql_query($emp_query);
$rand_emp_id=$rand_emprow['Emp_id'];


if(!is_null($description) && (strlen($description)>0) && !is_null($title) && (strlen($title)>0) && !is_null($urgency) && !is_null($department) && !is_null($today))
{
	$sql="INSERT INTO `ticket_information` (`ticket_description`, `priority_level`, `registered_time`, `last_updated_time`, `asigner_id`, `dept_id`, `ticket_title`)
	VALUES ('$description','$urgency','$today','$today', '$emp_id','$department','$title')";		
	mysql_query($sql);
        echo 'Ticket Created Successfully';
//	echo "<script type='text/javascript'>";
//	echo "window.close();";
//	echo "</script>";
}

else
{
	$empty="Please ensure all fields are filled in.";
	$_SESSION['error']=$empty;
	header("location: createTiceketForm.php");
}

?>
