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
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | PHP with MySQL, Assignment II</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>

            $(document).ready(function (){
                $("#reset").on("click", function() {
                    
                    console.log("The reset button was clicked.");

                    $.ajax({

                        url: "/CS-210-PHP-MySQL/php-mysql/assignment-II/delete.php",
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
    		<h1>Email Address Validation Form</h1>
            <div id="to_be_cleared">
                <?php
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    }
                ?>
            </div>
            <form class="clearfix" action="process.php" method="post">
                <p>
                    <label>Email <span>*</span>:</label> 
                    <input type="text" name="email">
                </p>
                <button class="float-left" type='submit'>Submit</button>
                <button id="reset" class="float-right" type='reset'>Reset</button>
            </form> 
        </div>	
    </body>
</html>
