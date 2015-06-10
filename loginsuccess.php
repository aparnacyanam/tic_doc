<?php 
    if(!isset($_COOKIE['loggedin'])){
        header("location:index.php");	
    }
 else {
         header("location:AboutTicDoc.php");	
         // TO DO redirect to AboutUs page
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TicDoc</title>
    </head>
    <body>
        <h1> Welcome to TicDoc ! </h1>
            <a href="logout.php">Logout</a>
    </body>
</html>
