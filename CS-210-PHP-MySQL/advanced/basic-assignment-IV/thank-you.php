<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thank You | Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | Advanced, Basic Assignment IV</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    	<div class="row first">
    		<h1><?php echo $_SESSION['success']; ?></h1>
            <a class="display-block text-align-center" href="index.php">You're welcome! Please take me back so I can register again, this is kinda fun.</a>
        </div>
    </body>
</html>            