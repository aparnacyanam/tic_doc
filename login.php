<?php

$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database server ");
$selected = mysql_select_db("ticdoc",$dbhandle);    
/* @var $user_username type */
$user_username = $_POST['username'];
$user_password = $_POST['password'];
  
$user_username = stripcslashes($user_username);
$user_password = stripcslashes($user_password);

$login_query = "SELECT * FROM log_in WHERE username = '$user_username' AND password = '$user_password'";
//$login_query = "SELECT * FROM log_in";
$output_results = mysql_query($login_query);
$count = mysql_num_rows($output_results);
echo $user_username;
echo $output_results;
echo $count;
if($count ==1){
	$seconds = 60 + time();
    setcookie(loggedin,date("F jS - g:i a"),$seconds);
    $_SESSION['loggedin_user']= $user_username;
    header("location:loginsuccess.php");
}
 else {
    echo "Log in failed : Incorrect User Name or Password";
}

?>
   





