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
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | PHP with MySQL, Assignment IV — Register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    	<div class="row first">
    		<h1>Welcome to MyFaceSpace</h1>
            <div class="message">
                <?php
                    if(isset($_SESSION['errors'])) {
                        
                        foreach($_SESSION['errors'] as $error) {
                            echo "<p class='fail'>{$error}</p>";
                        }

                        unset($_SESSION['errors']);
                    }
                    if(isset($_SESSION['success_message'])) {
                        echo "<p class='win'>{$_SESSION['success_message']}</p>";
                        unset($_SESSION['success_message']);
                    }
                ?>
            </div>
            <div class="column half-width">
                <h2>New to MyFaceSpace? Register for an account!</h2>
                <form class="clearfix" action="process.php" method="post">
                    <input type="hidden" name="action" value="register">
                    <p>
                        <label>First Name <span>*</span>:</label> 
                        <input type="text" name="first_name">
                    </p>
                    <p>
                        <label>Last Name <span>*</span>:</label> 
                        <input type="text" name="last_name">
                    </p>
                    <p>
                        <label>Email <span>*</span>:</label> 
                        <input type="text" name="email">
                    </p>
                    <p>
                        <label>Password <span>*</span>:</label> 
                        <input type="password" name="password">
                    </p>
                    <p>
                        <label>Confirm Password <span>*</span>:</label> 
                        <input type="password" name="confirm_password">
                    </p>
                    <button class="float-left" type='submit'>Register</button>
                </form> 
            </div>
            <div class="column half-width margin-right-twenty">
                <h2>Already have an account? Go ahead, sign in!</h2>
                <form class="clearfix" action="process.php" method="post">
                    <input type="hidden" name="action" value="login">
                    <p>
                        <label>Email <span>*</span>:</label> 
                        <input type="text" name="email">
                    </p>
                    <p>
                        <label>Password <span>*</span>:</label> 
                        <input type="password" name="password">
                    </p>
                    <button class="float-left" type='submit'>Login</button>
                </form> 
            </div>
        </div>	
    </body>
</html>
