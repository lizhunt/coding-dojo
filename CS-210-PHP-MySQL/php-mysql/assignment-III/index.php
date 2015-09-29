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
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | PHP with MySQL, Assignment III</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>

            $(document).ready(function (){
                $("#reset").on("click", function() {
                    
                    console.log("The reset button was clicked.");

                    $.ajax({

                        url: "/CS-210-PHP-MySQL/php-mysql/assignment-III/delete.php",
                        method: "GET",
                        success: function(data) {
                            console.log(data);
                            $("#to_be_cleared").html("");
                        }

                    });
                });
            });

        </script>
    </head>
    <body>
    	<div class="row first">
    		<h1>Welcome to QuotingDojo</h1>
            <div id="to_be_cleared">
                <?php
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    }
                ?>
            </div>
            <p>Have a great quote to share? Submit it below!</p>
            <form class="clearfix" action="process.php" method="post">
                <p>
                    <label>Your Name <span>*</span>:</label> 
                    <input type="text" name="source">
                </p>
                <p>
                    <label>Your Quote <span>*</span>:</label>
                    <textarea name="quote"></textarea>
                </p>    
                <button class="display-inline-block" type='submit'>Add My Quote</button>
                <a href="quotes.php" class="display-inline-block">Skip to Quotes</a>
            </form>
            <button id="reset" class="margin-auto" type='reset'>Reset</button> 
        </div>	
    </body>
</html>
