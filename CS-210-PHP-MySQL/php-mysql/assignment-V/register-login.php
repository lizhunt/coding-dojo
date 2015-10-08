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
        <div id="header" class="clearfix">
            <h2 id="logo" class="float-left display-inline-block">CodingDojo Wall</h2>
            <ul class="float-right display-inline-block">
                <li class="last"><a href="register-login.php">Register or Sign In</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div id="main" class="padding-top-twenty">
        	<div class="row">
        		<h1 class="text-align-center">Register or Log In</h1>
                <div class="win-fail-messages">
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
                <div id="register-box" class="register-box float-left half-width margin-right-twenty">
                    <h2 class="text-align-center">New to The Wall? Register for an account!</h2>
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
                        <button class="float-left dark-grey-background" type='submit'>Register</button>
                    </form> 
                </div>
                <div id="login-box" class="float-right half-width">
                    <h2 class="text-align-center">Already have an account? Go ahead, sign in!</h2>
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
                        <button class="float-left dark-grey-background" type='submit'>Log In</button>
                    </form> 
                </div>
            </div>
        </div>    	
    </body>
</html>
