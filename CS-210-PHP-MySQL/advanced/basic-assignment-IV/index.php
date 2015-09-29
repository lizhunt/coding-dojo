<?php 
// $_SESSION = array();
session_start(); 
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | Advanced, Basic Assignment IV</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>

            $(document).ready(function (){
                $("#reset").on("click", function() {
                    
                    console.log("The reset button was clicked.");

                    $.ajax({

                        url: "/CS-210-PHP-MySQL/advanced/basic-assignment-IV/delete.php",
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
    		<h1>Register for MyFaceSpace</h1>
            <form id="registration" class="clearfix" action="process.php" method="post" enctype ="multipart/form-data">
                <input type="hidden" name="action" value="user_registration" >
                <p>
                    <label>Email <span>*</span>:</label> 
                    <input type="email" name="email">
                </p>
                <p>
                    <label>First Name <span>*</span>:</label>
                    <input type="text" name="first_name">
                </p>
                <p>
                    <label>Last Name <span>*</span>:</label> 
                    <input type="text" name="last_name">
                </p>
                <p>
                    <label>Password <span>*</span>:</label> 
                    <input type="password" name="password">
                </p>
                <p>
                    <label>Confirm Password <span>*</span>:</label> 
                    <input type="password" name="confirm_password">
                </p>
                <p>
                    <label>Birthdate:</label> 
                    <input type="date" name="birth_date">
                </p>
                <p>
                    <label>Profile Picture (Optional):</label> 
                    <input type="file" name="profile_picture">
                </p> 
                <div id="to_be_cleared">
                    <?php 
                    if(isset($_SESSION['errors'])) {
                        foreach($_SESSION['errors'] as $error) {
                            echo "<p>". $error . "</p>";
                        }
                    }
                    ?> 
                </div> 
                <button id="reset" class="float-left" type='reset'>Reset</button>
                <button class="float-right" type='submit'>Submit</button>
            </form> 
        </div>	
    </body>
</html>
