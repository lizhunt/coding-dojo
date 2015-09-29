<?php 
session_start();
require_once('new-connection.php');

$query = "SELECT * FROM quotes
          ORDER BY id DESC";
$results = fetch($query);

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | PHP with MySQL, Assignment III — Quotes</title>
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
    		<h1>Submitted Quotes</h1>
            <div id="to_be_cleared">
                <?php
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    } 
                ?>
                <button id="reset" class="margin-auto" type='reset'>Clear Message</button>
            </div>
            <p><a href="index.php">&larr; Submit another quote</a></p>
        </div>
        <?php foreach($results as $row) { ?>
            <div class="row border-bottom">
                <blockquote><?= $row['quote'] ?></blockquote>
                <p>&mdash; <strong><?= $row['source'] ?></strong> <?= $row['created_at'] ?></p>
            </div>    
        <?php } ?>    
    </body>
</html>
