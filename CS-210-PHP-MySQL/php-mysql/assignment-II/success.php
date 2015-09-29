<?php 
session_start();
require_once('new-connection.php');

$query = "SELECT * FROM emails";
$results = fetch($query);

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | PHP with MySQL, Assignment II — Success</title>
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
    		<h1>Thank You!</h1>
            <div id="to_be_cleared">
                <?php
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    } 
                ?>
                <button id="reset" class="margin-auto" type='reset'>Clear Message</button>
            </div>
        </div>
        <div class="row clearfix">
            <h2>Email addresses entered:</h2> 
            <p><a href="home.php">&larr; Enter another email address</a></p>       
            <table>
                <tr>
                    <th>ID</th>
                    <th>Email Address</th>
                    <th>Created At</th> 
                    <th>Updated At</th>     
                </tr>
                <?php foreach($results as $row) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['created_at'] ?></td>
                        <td><?= $row['updated_at'] ?></td>
                    </tr>
                <?php } ?>    
            </table>    
        </div>	
    </body>
</html>
