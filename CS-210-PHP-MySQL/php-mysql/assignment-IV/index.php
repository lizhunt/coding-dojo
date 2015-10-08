<?php 
session_start();
require_once('new-connection.php');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | PHP with MySQL, Assignment IV — Home</title>
        <link rel="stylesheet" href="style.css">   
    </head>
    <body>
    	<div class="row first">
    		<h1>Welcome back, <?php echo "{$_SESSION['first_name']}"; ?>!</h1>
            <p><a href="process.php">Log off</a></p>
        </div>	
    </body>
</html>
